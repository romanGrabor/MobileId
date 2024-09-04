<?php

namespace Eurostil\MobileIdSDK;

/**
 * Параметры для работы с сервисом Mobile Id.
 */
class Config
{
    public const CLIENT_ID = 'testClient';
    public const RESPONSE_TYPE = 'mc_si_async_code';
    public const MOBILE_ID_ENDPOINT = 'https://192.168.125.56:44313/';
    public const SCOPE = 'openid mc_authn';
    public const PRIVATE_KEY = <<<END
-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAr1Jz1b+qLr5+lyV1PCbFmT7K3CUpA7wZcsm+X2aWqFAHEKZf
jYj1FhMkkcbG2z5Nty3LNUyVvl+bPHMZ4BmG2wG9u+4Gx/9gFXgY/gyY+VRDmn65
MZMWjz5nxtmGoWrZrz43B9/X5Gb/aUgO8vjVOPxFJz8NNm//oa5bnJTh8sd9lxEt
6X6l84kBQsN2H20V0RAxDTK+JFO/GDx9PGKEX8/rXo5NF0kFk85XYvA3xvP03Mty
/HzrHw4XlHxBlTlMCzO3cQvQFNdRg7ndQ9Vwx9jBRZB/fXLTYXFXJ3E3Fp1brl3g
N9VjM7T+xK/7nQVEStTwp8kYP4rm7LS3DLtFwwIDAQABAoIBAQCFv9A1UjEgQmPf
uh9vJ6u2vL/DnsVNSmcM8UEkcKdEtCZt2yIFak9Ao3FGGLDS3EbsLTYUM8U2O5J2
czX/gmTL6ek+6Ow3bMhwok7oJNgXgjcx6NCFPf2jRz+FVQa3pZl7IISW8ujKpVZ7
vFuFP9BhvsghHg2FjbzYtT+S8XE7yfjHeBaZ38LBcJ8DzrTgNVRPzGqfW5pHx4IA
KbksfPfF4rN+G8PH3gV92z/J0QZJGozzXg/p+o1TNR7Wz5rz4TOq2KOjsq4HfHnK
eBphYJr0RMfVbV58mVGiSY5dnRtQOQZz2T1KoZKZkBlWqHg43ZJ8A5o1zZJ9xgIB
Gh9TbQoBAoGBAOlAiVxYRp2YtbA5N1e91cmOelMI4hPtJLv2Hv3Dfb82Lwd1JRGp
kxMWuLONLBFPpGT7BpJAZJfXcIilB+NXL3m7ri3AN3JuwX0Dl8I5A1n/D6vVzA5z
CzA+uxCHGhzUkq+nXbJInHMmF2XjlO4gAzRs60nD3q5qNkdxqXn5R/oBAoGBAMzE
kkCjsjBdlt9T8Bb+TC03DwT5Sw5riI4+YXFPXr6dHjJQXgi/Hz2L3gB+g5RugNVB
9f+6le6FleFv4KDW3uKFkroTWwqxFHQMn5Hojquxw5L/xGByMM6uZXGub5xksB48
rTD5/yqCuupZbTkd/sLs1XRRdZ2CBAyIjD/ZsW7BAoGBAJjzrsVvRl4VdfDBvC7K
I+mEXnvTrN4Bc85nNvNsX5RZJkMvYVv1fKQOHqfM6ZbiLC9Kv5DG4M+vIRXKt5z2
E/n+smZ+KvavLPURdzVE1sG3c+fDKCp8e/0TmP5a+2PvKY2Llml+MDNBn6dr+ZhH
dM6yP8TbShSy/KjFmjKwTTWBAoGAYviRB8CHqrfyzpAlwxmQMjGHEVpScljA41W8
U4JkZL1eTwABv9MEseS0hs4I6sfMK9iYjCqM4aB2N2Zj5mhHFMcmEA3g8RhBaCxT
xe4Ia1g0G6/YeZhR+dKJY6w2eprfNadJdCGMyAn9PlLnhM7QSH/uf5gT76z3OjSD
zTjF0kECgYAi+5fdHs2MiNFGxOFIsV7Rh7jKwN5ph7kkA0unSHnFxhOh+ODyV/HL
KOZPR6qlXtJh53dYjCNClqx0lKtKkMv8TpI2MFzCScGmAyAWYSpQXzhxZGJsMUtV
Zq/J2Q6Km1P+7RWKnf3P4nnt5Jfx4tFv78Smy+nNjYZyElq7rPfZyw==
-----END RSA PRIVATE KEY-----
END;
}
