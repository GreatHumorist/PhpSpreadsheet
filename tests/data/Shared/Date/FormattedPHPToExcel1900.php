<?php

// Year   Month  Day  Hours  Minutes  Seconds  Result            Comments

return [
    // 31-Dec-1899, the wrong date
    [
        false,
        1899,
        12,
        31,
    ],
    // the default value for 0 in excel
    [
        0.0,
        1900,
        1,
        0,
    ],
    // 1-Jan-1900 the real minimum date
    [
        1.0,
        1900,
        1,
        1,
    ],
    // 31-Dec-9999 the real maximum date
    [
        2958465.0,
        9999,
        12,
        31,
    ],
    [
        false,
        10000,
        1,
        1,
    ],
    // PHP 32-bit Earliest Date 14-Dec-1901
    [
        714,
        1901,
        12,
        14,
    ],
    // 31-Dec-1903
    [
        1461,
        1903,
        12,
        31,
    ],
    // Excel 1904 Calendar Base Date   01-Jan-1904
    [
        1462,
        1904,
        1,
        1,
    ],
    // 02-Jan-1904
    [
        1463,
        1904,
        1,
        2,
    ],
    // 19-Dec-1960
    [
        22269,
        1960,
        12,
        19,
    ],
    // PHP Base Date 01-Jan-1970
    [
        25569,
        1970,
        1,
        1,
    ],
    // 07-Dec-1982
    [
        30292,
        1982,
        12,
        7,
    ],
    // 12-Jun-2008
    [
        39611,
        2008,
        6,
        12,
    ],
    // PHP 32-bit Latest Date 19-Jan-2038
    [
        50424,
        2038,
        1,
        19,
    ],
    // 18-May-1903 13:37:46
    [
        1234.56789,
        1903,
        5,
        18,
        13,
        37,
        46,
    ],
    // 18-Oct-1933 16:17:37
    [
        12345.6789,
        1933,
        10,
        18,
        16,
        17,
        37,
    ],
];
