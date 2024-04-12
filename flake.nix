{
  inputs = {
    nixpkgs.url = "github:NixOS/nixpkgs/nixos-23.05";
    systems.url = "github:nix-systems/default";
  };

  outputs = { self, nixpkgs, systems, ... }:
    let
      version = "0.0.1";
      forEachSystem = nixpkgs.lib.genAttrs (import systems);
      buildCommand = system:
        let
          pkgs = import nixpkgs { inherit system; };
          options = {
            artifactVersion = version;
          };
          optionsString = pkgs.lib.concatStringsSep "," (pkgs.lib.lists.map (option: "${option}=${options.${option}}") (pkgs.lib.attrNames options));
        in
        ''
          ${pkgs.openapi-generator-cli}/bin/openapi-generator-cli generate \
            --additional-properties=${optionsString} \
            --git-user-id Oak-Digital \
            --git-repo-id resights-php \
            -i ${./resights.openapi.json} \
            --skip-validate-spec \
            -g php \
            -o ./generated
        '';
    in
    {
      apps = forEachSystem (system:
        let
          pkgs = import nixpkgs { inherit system; };
        in
        {
          generate =
            let
              script = pkgs.writeScriptBin "generate" (buildCommand system);
            in
            {
              type = "app";
              program = "${script}/bin/generate";
            };
        });
      packages = forEachSystem (system:
        let
          pkgs = import nixpkgs { inherit system; };
        in
        {
          resights-php = pkgs.stdenv.mkDerivation {
            name = "resights-php";
            src = ./.;
            buildPhase = buildCommand system;
            installPhase = ''
              mkdir -p $out
              cp -r ./generated/* $out
            '';
          };
        });

      devShells = forEachSystem (system:
        let
          pkgs = import nixpkgs { inherit system; };
        in
        {
          default = pkgs.mkShell {
            buildInputs = [ pkgs.openapi-generator-cli ];
          };
        });
    };
}
