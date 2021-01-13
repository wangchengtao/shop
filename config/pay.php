<?php

return [
    'alipay' => [
        'app_id'         => '2021000116696552',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvgYuRJZNvjSOskE0MR8rMa43SOHOZ9ClAGlIGo0ci8ve3vw8ukqqtCEMXFEYzA3UuiesuVpPhPypvr+wEfLe8OkDuCpFND9qOO2FjCFAztVD4yu3Mq384JQoORKPIupaCYezyVY5z9HDCADR20FFplR9SOHEp9wWpejyMNoVh4DFzdvhn0wA0quwAfqK4mJmtAjosmDgc5OpAT6n0dnEf6vqw6VCprXiq8P6uO8Y15tBLZusagDLBXL4O7BJK0EMsWY7RJ4SSK8zyr577Dz+eMnRSAPCpv2g/apgJb02lv//lPBhfOL69x6ZxCxU29on3faK/HyPMy4hx40PNaWSzwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAkTmO9/kJKw/L247JigEMUiQ39/gA3NMCBAqwwNV6lqduE8oEVkoN+JR0mbakkm1Rr/GICWoY+6wMGGf3HPvUGRyXDIjGrt+IZUfxWqC2wLqS8nCK3arLLPJCdPcX+n60dQ5NxW0s31cpFmZ1FL/tXbC0Wu01U5MZWZNCS+1J+lqHDbOZH3nR5Ng4U1mowHQ/j46HqDK8VVI5Ir4kVj90s5dfgmzgptT1m6nR6D4BrPKs40N83FMr14hIpUFPon9SmIFx4ab/YNnT3DCiAfaYlB1PXSneI2BCHGMd+gadJm5/5GFnAWkUiv77Auo4qoh27hzLTgZ462qLKFQCBOnZfwIDAQABAoIBACiEEmsEQ5aL9afvkjK6UCGqkSLRQgxZojpWcTGbXXQiigdjWQpp5rPvVwh7eDaR4TRhAj7+JrIwMb+tYbfoWigXXdzVW/j1zCvVgnRyWgozA0Q4OcXWHJERlZDkTwBH0TjHINNvvhEhVAk31HpRgXueDPNBMpt6cpwXBWwBa544rZcBtazE0oa0nyCYzIbQhwNQ2nEM+jDTz9CNuUNltMz0uZNRDqsn23+w5ykmzkf52hQ292gwn/xwzEJmnML4Ssc/rDj+RjLAtzyIqhJaUB0oGYG9eL4ShUtTpAXVT0ltwWU3gix4b91cXBnIFbVBR+YSg6ngmz4c/uWlmzbLfSECgYEA7HlIWcmy0QMGcoF9bl/5Kmm89wWWoy2giOQicCc4zzRVUmbWXlx5D21uKtSXzk76Wh5ovneE2MtbSHLRcquwPPbEFdeOvelTmZJgCzmTIiUSMW6ci6SBOlUJQQpDgQDZ+KeICr0pTEhKcqSEXVXB319QFK9CMJU3+uuu1V2KNasCgYEAnTdnbfPmtliBqNkWAn0yXLmBnvIlNbFFXYUKkZzd3zOEfnY5O38xTEjUc3eXT6qyAglVkYud/Unh8aWZfJzn3s8gKQJjFw55QztPkopF+CY7zd/kmYRCDnk16rF3NQfh///YwL2FHLD59W/ecXZkn2hYpWvMVOZaCHFzfFf5730CgYAEPkjmE5B536wF8fzmNiKqeCtD433If9EZo75adNm4HiBJ0j6WguJJPJV1f0saEKC9bT5D7LEdksiYjDbl797BuUvbeHq/PaiaYN4IVYgmXLPu3yU//Du1aEE6QYzki7ddluQCDVLoY4OyevFFG3zXHUa6mEp/xK20evYwLfWE8QKBgHQA3oNl9TVU5w8UZ0Yc5N1AT+FdIJGWpO0Vbq/0xE2eMMQzLZW2C0UTdBdjBbXV6JTSGF5VW5T6QApSu4cUK47e3AcGaOEpX9Z43ATvnCM26ufErWONEESnsV3j5mat01dWi7Pj42VBPJ6aFdM4nZR1pPsiKFn4wjP6qlD0hUntAoGAN1WN4fIsvi50LW5Xb2Md+9GpB/gxlkCOOqhu99NgL4vW5/mKtKsG6TPUK1USAAcNVCM60O3KqY7wJQZ9GGkYq9ZQk2r2W/9dw7/wiMZHFJKFiPqvEj83soNvxBpKDPxKhjCQ7xACi+ORlan9uKtcqYEH6gyjbhw3BHq5mNS4rDY=',
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
