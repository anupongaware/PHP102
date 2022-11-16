<?php
//ทบทวน
//  \d = [0-9]
//  \D = [^0-9]
//  \s = [\t\n\r\f\v]
//  \S = [^ \t\n\r\f\v]
//  \w = [a-zA-Z0-9]
//  \W = [^ a-zA-Z0-9]

echo "1. โจทย์เอาเฉพาะตัวเลข" . "<br/>";

$s = 'match text   abc123xyz
match text define 123
match text var g = 123;';


preg_match_all(
    "|\\d+|",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";

echo "2. โจทย์เฉพาะตัวอักษรที่มีจุด" . "<br/>";

$s = 'match text   cat.
match text define 895.
skip text. abc1';


preg_match_all(
    "|\\w+[.]|",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";


echo "3. เลือกคำที่ขึ้นต้นด้วย c m f" . "<br/>";

$s = 'match text can
match text man
match text fan
skip text dan
skip text ran
skip text pan';

preg_match_all(
    "@(c|m|f)...@",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";


echo "4. เลือกคำทุกคำยกเว่นขึ้นด้วย b" . "<br/>";

$s = 'match text hog ?
match text dog ?
skip test bog';


preg_match_all(
    "|[^b]*|m",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";


echo "5. เลือกคำทุกคำที่่เป็น Upper case" . "<br/>";

$s = 'match text Ana?
match text Bob ?
skip test Cpc
skip text aax
skip text bby
skip text ccz';


preg_match_all(
    "|\\b([A-Z]..)\\b|m",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";

echo "6. เลือกคำที่มีตัว z 3 ตัวขึ้นไป" . "<br/>";

$s = 'match text wazzzzzup
match text wazzzzup
skip text wazup';


preg_match_all(
    "|\\b(waz{3,}up)|m",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";


echo "7. เลือกคำที่เป็น ชื่อไฟล์ที่เป็น .pdf" . "<br/>";

$s = 'file_a_record_file.pdf
file_a_record_file
file_yesterday.pdf
file_yesterday
testfile_fake.pdf.tmp';


preg_match_all(
    "|^.*.pdf$|m",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";



echo "8. เลือกคำที่เป็น file found?" . "<br/>";

$s = 'match text 1 file found?
match text 2 files found?
match text x files found?';


preg_match_all(
    "|\w files? found\?|",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";


echo "9. แยก group" . "<br/>";

$s = 'Jan 1987
May 1969
Aug 2011';


preg_match_all(
    "|^(... (\\d{4}))$|m",
    $s,
    $out,
    PREG_PATTERN_ORDER
);

echo "<br/>";


print_r($out);
echo "<br/>";
echo "<br/>";
