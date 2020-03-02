<?php

return [
    'alipay' => [
        'app_id'         => '2016101900721030',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlX3OTJhUFmedJ7EoFrn+jBG0yTLbS5SNQt3MH225GpETrMOXOVPdmiQARSa+8W+In5UXDZCko17apiPHuGrBCzOixbzbP8MbkG5cQQrCh9G1u8lNgd2XXgTfhj4CC0Fu1DKihPjgV5CBM8mULO7fgBA+eA9R4Djj7BcjyLq8JKEZXRmg/cr1BUS8LosCy2bAmGxI+tdl+9/s+1eONfqvHVO15c++0a08SpNq3bi0R5ZgAZeS4ovHBN3mFxISJJpf63XtbTPuv+ocZU1Cyh9DUI+r6wFlLKvVLTx50FnaLgpLtVurkkAnshnTVTQ6FamJC3YSXEp6rwfW5VfhaJXc5wIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAnqYgbIDuVygGKYdEn2zdC1nZrgBr26uLNklMp6Bgir5ILNi72KVTVoj5fn3/7aD/A9XonIZhkXCkjmQUeWub4+7lOWkWoSXr+iFkSMxjKQXW+SCI/PRhAR7vLuVYrgMWUFjDcNBD5qz88Lzg5UE9lhJ1MS3LP4wU221Ob73AowCRbzkEoXR2XkUiIFJsrlxBHYpqXzhXQi3wx5YzxDDUFq3SUTmeOUEgth0pHRkzWzTOBXjJ+dsznn/Z06B46udML1YOuFCtJeiIle3cR6noOzVjm62EVgoMiRxgexaSz7EzcT9l9qfxTLC9p2Y9AS1wSs+zFDfSgKHSkFQFLNMlBQIDAQABAoIBAQCUKYe8bYipYtqmbAq9bPjewfHWW9RfGczwTPJG1jNzP5O+NkbwZC35cgC3jkq2jRW8akhL7gAuyOkVhgfNAZ9b9l6jCC63HuhL+GVky2SMCkUi8qycuEnjtxUfUddI498x+EPGFupjAwlSdsL9t7khb2l9HUxks5lC98k5+Bdw4f19PFmOSlEqY2JbaOL4bTIP8z/CbnyOcC5lvFdY2z0W5+IUUxi0d1RwL7suAh7iqkibKZBF3BXv/JSJdUsimG0Ekctuq1LuDo3/Dck1eHXQzkTL/Yc1bLQ80TtBbuPe3kDmflWxgrxKsf7TYpEpl353gjsweerZCHdw4G9RYW79AoGBAMwKhnm9GX9mJfmIlqDOWJyOFrjgRobvDdPQOxsDu4a39ASAmeuz2ndUK4GB7gfCut1kmDzOXTaKttX+8FFueURBwJf9CcTJ/mRcwzXbIHYSeBMP6g2wOQko2Yf8fC3P/MDX7CbQzbKlZYG2ZinGwM/MX4vyPXBdrtsVpgIoHjD7AoGBAMcMejLgsRz4T9Mu/YI2fGcVO7BNDG2Y72pCDzB4if1q86vTY0hmfbEaBKWLj9W+Pau5u+jTuLsUJrAPa/p/bjzPPDbOUllSpvSDZsVHRmFAbxeTtH4tPSyTx/39RkWBH9aqgsG8SNGIydujXTzMj0jERNna45hG8q4o6/TMUCH/AoGBALzlzaNs5uskJWoEAvdysWSWwwB7Wa/YJuP+tomHBhhtuzJj4Jvu0QWCXhiysixrIlaOp8Y7gt5Yw3YQZGnvLcN8YBIVx/Jw0twVaQA2ErJc3N9A732mtNb/A4y6ujgrgqMCA3XX/2cxam0Q8Toh8CUw3xAPvsOFZ7kaLKt4eqL7AoGBALFGa47kjtk+TdnH///4htNIFeDuviLeElyQePayZDNPDbX6jnHs1gTlJz5JDdFPnZ1TzgeOiPgU+l/TXFe9JnECIJ6vIqhq9EbQwLbyw7vZpxdYdWfq4pDRDU0oRW2hkrmdItdo2XHEYgM7e86qYPJt2uQsDoeQqJJz37ImRTgBAoGAJ1yzyuTjHrAP0pza2YleeG8ReHecNEpRYWm4wTDev+Z0TkyqNqUPMAz6WUbpfcCxMBOLVOYbwZ93sXMwX4da3JLRb+T2jn1V6RtlsnvXNZWJp6kvQEJDq6bxMGOCfKrHgmVdyUKpwVJ/JU06bTJwXT8q8zIxj7p+Z1rA6mPsyYk=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
