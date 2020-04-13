# SENTRAIDER_FR

### Why ?
---

### Requirements
---

- Apache 2.4
- PHP 7.3
- MySQL 5.7
- Composer

### Usage
---

### Installation
---

```
git clone https://github.com/jonathankablan/sentraider_fr.git
cd sentraider_fr
./install.sh
```

### Configuration database
---

```
# Créer la base de donnée si cette base n'hesite pas encore 
# -f signifie --force pour force l'excecution 
- bin/console doctrine:database:create -f

# met a jour les entites en base de donnée
- bin/console doctrine:schema:update -f

# Lance les fixtures pour avoir des données de test en base
- bin/console doctrine:fixtures:load
```

=======
### Configuration jwt
---

- Jwt Generating the Public and Private Key
```
composer require lexik/jwt-authentication-bundle
```
- Generating the Public and Private Key

```
$ mkdir config/jwt
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
Password jwt: AnnaBelle1980F2IArchi
```

- Configuring the Bundle

```
lexik_jwt_authentication:
    private_key_path: %kernel.root_dir%/../var/jwt/private.pem
    public_key_path:  %kernel.root_dir%/../var/jwt/public.pem
    pass_phrase:      %jwt_key_pass_phrase%
    token_ttl:        3600
```

- Test jwt console
```
$ bin/console debug:container jwt
```

- Get a JWT Token:
```
$ curl -X POST -H "Content-Type: application/json" http://localhost:8000/login_check -d '{"username":"johndoe","password":"test"}'
-> { "token": "[TOKEN]" }
```

- Example of accessing secured routes:
```
$ curl -H "Authorization: Bearer [TOKEN]" http://localhost:8000/api
-> Logged in as johndoe
```

### Configuration
---

### Deployment
---

### Documentation
---

### Authors / Maintainers
---
