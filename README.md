# SEPA DIRECT DEBIT E-MANDATES

The goal of the project is to generate SEPA e-mandates according to the guides implemented by the EUROPEAN PAYMENT COUNCIL (https://www.europeanpaymentscouncil.eu/)
The scope of the project has three steps
- Generate the form in merchant ,in which user inserts bank details
- Initiate the E-mandate according to European payment Council
- Authentication of user in external provided
- Reception of e-mandate signed

TECHNICAL REQUIREMENTS

- php > 7.2
- MYSQL

INSTRUCTIONS

git clone
in root dir copy/paste .env-dist.
Rename to .env
setup database credentials and database version

dir /:
composer install

php doctrine:schema:update --force

create writable dir

var/logs/xml


url:
The e-mandate can de downloadable here http://localhost/initiation/download


