# Setup

1. Clone the repository
1. `docker compose up -d`
1. Fix permission for linux: `chown -R 33:33 ./`
1. `docker compose exec products bash`
    1. `c install && a migrate --force`
1. `docker compose exec ratings bash`
    1. `c install && a migrate --force`
1. `docker compose exec warehouse bash`
    1. `c install && a migrate --force`
1. `docker compose exec orders bash`
    1. `c install && a migrate --force`
