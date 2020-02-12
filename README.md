# deptrac - czyli jak stale utrzymywać architekturę aplikacji na wysokim poziomie

## GitHooks

    rm -rf .git/hooks
    ln -s ./../.githooks ./.git/hooks
    chmod +x ./.githooks/pre-commit
