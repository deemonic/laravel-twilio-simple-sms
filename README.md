# laravel-twilio-simple-sms
Send a SMS using the Twilio API built on the laravel facade architecture

## Installation
Use [composer](https://getcomposer.org/) to install

```bash
composer require deemonic/laravel-twilio-simple-sms
```
## Prerequisites

In order to use this package you will need to have an active Twilio account and a Twilio phone number capable of SMS. You can sign up [here](www.twilio.com/referral/wdE7RH).

Once logged in you will need to get the following:

- Twilio number (SMS capable)
- Account SID
- Auth Token

Add the SID and Auth token to your .env file
```
TWILIO_ACCOUNT_SID={YOUR_ACCOUNT_SID}
TWILIO_AUTH_TOKEN={YOUR_AUTH_TOKEN}
```

## Usage

As this package is built on Laravel's facade architecture you can call the method statically, this makes the syntax very clean and simple.
The method accepts 3 arguements:

- from_number (Your Twilio SMS number)
- to_number (The number you want to send a message to)
- message (The message you wish to send)

```
use Deemonic\SMS;

SMS::send('from_number', 'to_number', 'message');
```
NOTE: The from_number needs to be in E.164 format. Twilio provides you with a number in this format already but if you wish to understand more you can do [here](https://www.twilio.com/docs/glossary/what-e164)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/deemonic/laravel-twilio-simple-sms/blob/master/LICENSE)
