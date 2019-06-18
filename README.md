# sms-verification
Simple SMS Verification with Laravel + Twilio

dont forget to ```composer install``` first and ```php artisan migrate```

add this to your .env
```
TWILIO_ACCOUNT_SID=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
TWILIO_AUTH_TOKEN=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
TWILIO_SERVICE_SID=XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
```

You can get the accountSid, authSid on https://twilio.com/console (Register to twilio first)
For the serviceSid you can get it on https://www.twilio.com/console/verify/services
