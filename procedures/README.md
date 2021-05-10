## Installation and Usage

Simply clone Laravel direcrtory and `npm install` inside the `procedures` directory. This will install required modules from node pacakge manager.
Once installed you can perform `npm run watch` to see the build status and other errors regarding `Mix`.

1. Lastly don't forget to import the .sql (perform `php artisan migrate` to import the sql tables).
2. Don't forget to change `.env`

```bash
# Simply Clone this repository (LOCAL)
git clone https://github.com/ziaahsan/Laravel
cd procedures
# install the dependencies for both the server root package.json and
npm install . # More information https://docs.npmjs.com/cli/v6/commands/npm-install
php artisan migrate
npm run watch

# Open another terminal and perform
php artisan serve
```

AWS Steps are so ODD!!
```bash
# Okay clone this repo.
composer install
npm install
npm run dev # this is noice, because of mix build is needed

# Modify the .env database (*Note host is localhost or private ip)
# Place the directory inside htdocs (Since I am using LAMPP, or do your own thing if you need it else where)
# Now php artisan migrate (This will import table for database)

# Finall lampp start
```

Read Documentation for other info.
