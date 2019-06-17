# sms-verification
Simple SMS Verification with Laravel + Twilio

composer require twilio/sdk

Enpoint
  - [host]/api/sms
    - data:
      - phone
  - [host]/api/check
    - data:
      - phone
      - code
