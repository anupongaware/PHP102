<!-- Regular Expression  search string pattern-->

<?php
preg_match_all(
    "|<[^>]+>(.*)</[^>]+>|U",
    "<b>example: </b><div align=left>this is a test</div>",
    $out,
    PREG_PATTERN_ORDER
);
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";

echo "<br/>";
echo "<br/>";

// function preg_match_all and preg_macth
preg_match_all(
    "|a(b)(c)|U",
    "adababccaeqwekofnkbasicabcpswewewewewqweqeqccdwq",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";
echo $out[2][0] . ", " . $out[2][1] . "\n";

//metacharacters .^$*+?{}[]

// [ ] => Character Class
//[abc] ==> a,b,or c;
echo "<br/>";
echo "<br/>";
echo "<br/>";

preg_match_all(
    "|[abc]|U",
    "adababccaeqwekofnkbasicabcpswewewewewqweqeqccdwq",
    $out,
    PREG_PATTERN_ORDER
);
printf("[ ] Character Class ");
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

// ^ = complement
// No choose that text after ^
printf("^ = complement ");
preg_match_all(
    "|[^abc]|U",
    "abcdefghijklmnopqrstuvwxyz",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

// / = backslash
//  \w alphanumeric character
printf("\w");
preg_match_all(
    "|\w|U",
    "abcdefghijklmnopqrstuvwxyz0123456789\\//_=+@2!#@$[]{}กขคงจฉ",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// \s whitespace
printf("\s");
preg_match_all(
    "|\s|U",
    "abcdefghijklmnopqrstuvwx yz012 3456789\\//_=+@2!#@$[]{}กขคงจฉ",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// \d  decimal digit [0-9];
printf("\d");
preg_match_all(
    "|\d|U",
    "abcdefghijklmnopqrstuvwx yz012 3456789\\//_=+@2!#@$[]{}กขคงจฉ",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



//. ==> (anytext)
printf(".");
preg_match_all(
    "|.|U",
    "abcdefghijklmnopqrstuvwx yz012 3456789\\//_=+@2!#@$[]{}กขคงจฉ",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//* ==> (match a lot, 0 -> infinity)
printf(".");
preg_match_all(
    "|.*|U",
    "abcdefghijklmnopqrstuvwx yz012 3456789\\//_=+@2!#@$[]{}กขคงจฉ",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//* ==> (match a lot, 0 -> infinity)
printf("*");
preg_match_all(
    "|b*|U",
    "abcdefghijklmnopqrstuvwx yz012 3456789",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//{x} ==> (output only x number )
printf("{}");
preg_match_all(
    "|b{2}|U",
    "abbbbcdefghijklmnopqrstuvwx yz012 3456789",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// | ==> (OR)
printf("|");
preg_match_all(
    "@cat|rat@U",
    "abbbrathijklmncatrstuvwx yz012 3456789",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// ^(outside)
printf("^(outside)");
preg_match_all(
    "@^cat|^rat@U",
    "catabbbrathijklmncatrstuvwx yz012 3456789",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



// m
printf("m");
preg_match_all(
    "@^cat|^rat@m",
    "catabbbrathijklmncatrstuvwxyz012
rat3456789",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// $ (เลือกตัวที่เลือกท้าย)
printf("$");
preg_match_all(
    "@^cat|^rat|^j.*d$@m",
    "catabbbrathijklmncatrstuvwxyz0d12
rat3456jad789
jasesdeasdjd",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



// "@([a-z]+(o))@m"
printf("@([a-z]+(o))@mU");
preg_match_all(
    "@([a-z]+(o))@mU",
    "123hello32232323goof2213321132",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// \A ==> จุดเริ่มต้นของ String , \Z ==> จุดจบของ String
printf("@\\bclass\\b@mU"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "@\\bclass\\b@mU",
    "no class at all asdasclassdweasd",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";




//  Email format
printf("email format"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "|[a-zA-z0-9_]+@[a-zA-z0-9_]+\\.[a-zA-z0-9_]+|u",
    "test_12@gmail.com",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";




//  GROUP
printf("Group ==> ()"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "|([a-zA-z0-9_]+)@([a-zA-z0-9_]+\\.[a-zA-z0-9_]+)|m",
    "test_12@gmail.com
x1x@abc.com
x2x@abc.com
x3x@abc.com",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



//  GROUP 02
printf("Group 02"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "|([a-zA-z0-9_]+)@([a-zA-z0-9_]+\\.[a-zA-z0-9_]+)|m",
    "test_12@gmail.com
x1x@abc.com
x2x@abc.com
x3x@abc.com",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//  GROUP 02
printf("Group 02"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "|([a-zA-z0-9_]+)@([a-zA-z0-9_]+\\.[a-zA-z0-9_]+)|m",
    "test_12@gmail.com
x1x@abc.com
x2x@abc.com
x3x@abc.com",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//  Time pattern
printf("Time Pattern"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "@(?<day>[0123][0-9])-(?<month>[A-Z][a-z][a-z])-(?<year>[0-9][0-9][0-9][0-9]) (?<hour>[0-9][0-9]):(?<min>[0-9][0-9]):(?<sec>[0-9][0-9]) @m",
    "12-Feb-2016 22:14:24 +0700",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

// foreach ($out as $items) {
//     foreach ($items as $item) {
//         echo $item . ", ";
//     }
//     echo "<br/>";
// }
print_r($out) . "<br/>";
echo ($out["day"][0]) . "<br/>";
echo ($out["month"][0]) . "<br/>";
echo ($out["year"][0]) . "<br/>";
echo ($out["hour"][0]) . "<br/>";
echo ($out["min"][0]) . "<br/>";
echo ($out["sec"][0]) . "<br/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//  Time pattern
printf("Time Pattern"); //เลือกเฉพาะ class ตัวแรก
preg_match_all(
    "@(?<day>[0123][0-9])-(?<month>[A-Z][a-z][a-z])-(?<year>[0-9][0-9][0-9][0-9]) (?<hour>[0-9][0-9]):(?<min>[0-9][0-9]):(?<sec>[0-9][0-9]) @m",
    "12-Feb-2016 22:14:24 +0700",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

// foreach ($out as $items) {
//     foreach ($items as $item) {
//         echo $item . ", ";
//     }
//     echo "<br/>";
// }
print_r($out) . "<br/>";
echo ($out["day"][0]) . "<br/>";
echo ($out["month"][0]) . "<br/>";
echo ($out["year"][0]) . "<br/>";
echo ($out["hour"][0]) . "<br/>";
echo ($out["min"][0]) . "<br/>";
echo ($out["sec"][0]) . "<br/>";

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//  Assertion
printf("Lookahead Assertion"); //เป็นตัวที่บอกว่าจะเอาหรือไม่เอาอะไร
preg_match_all(
    "|foo(?=bar)|m", //หาคำว่า foo ที่ตามท้ายด้วยคำว่า bar
    "I live in pfoobararis parfiius us ifoobarn the barther spriung",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

//  Assertion
printf("Lookahead Assertion2"); //เป็นตัวที่บอกว่าจะเอาหรือไม่เอาอะไร ,มองไปทางด้านขวา
preg_match_all(
    "|foo(?!bar)|m", //หาคำว่า foo ที่ไม่ได้ตามท้ายด้วยคำว่า bar
    "I foollive foo in pfoobararis parfiius us ifoobarn the barther spriung",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


//  Assertion
printf("Look behind Assertion01"); //เป็นตัวที่บอกว่าจะเอาหรือไม่เอาอะไร ,มองไปทางด้านขวา
preg_match_all(
    "|(?<!bar)foo|m", //หาคำว่า foo ที่ไม่ได้ตามท้ายด้วยคำว่า bar
    "I live foo in pfoobararis parfiius us ifoobarn the barther spriung",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";



//  Assertion
printf("Look behind Assertion02, หาคำว่า foo ทีมีตัวเลขนำหน้า 3 หลัก และตัวเลขเหล่านั้นไม่ใช่ 999"); //เป็นตัวที่บอกว่าจะเอาหรือไม่เอาอะไร ,มองไปทางด้านขวา
preg_match_all(
    "|(?<=\d{3})(?<!900)foo|m", //หาคำว่า foo ที่ไม่ได้ตามท้ายด้วยคำว่า bar
    "123foo adafoo 999foo 998foo 998foo",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

//  Assertion
printf("Look behind Assertion02, หาทุกคำยกเว้นคำว่า bat"); //เป็นตัวที่บอกว่าจะเอาหรือไม่เอาอะไร ,มองไปทางด้านขวา
preg_match_all(
    "|(?<=\d{3})(?<!900)foo|m", //หาคำว่า foo ที่ไม่ได้ตามท้ายด้วยคำว่า bar
    "123foo adafoo 999foo 998foo 998foo",
    $out,
    PREG_PATTERN_ORDER
);
echo "<br/>";
echo "<br/>";

foreach ($out as $items) {
    foreach ($items as $item) {
        echo $item . ", ";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
