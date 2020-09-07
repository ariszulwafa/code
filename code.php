<?php
        // Print out main menu..
    system('clear');
    system('figlet recode mati');
    echo "=========================\n";
    echo "=     𝗧𝗢𝗢𝗟𝗦-𝗘𝗡𝗖𝗢𝗗𝗘    =\n";
    echo "=    AUTHOR :MR.ARIS    =\n";
    echo "= 𝗖𝗛𝗔𝗧:08884196160     =\n";
    echo "=========================\n";
    echo "DILARANG RECODE!!\n\n";
    echo "===============================================\n";
    echo "=      TOOLS UNFAEDAH    TOOLS UNFAEDAH       =\n";
    echo "===============================================\n";


    echo "pilih menu:\n\n";
    echo "    1) Encode Md5シ︎\n";
    echo "    2) Encode Base64シ︎\n";
    echo "    3) Encode Sha1シ︎\n";
    echo "    4) Encode Md4シ︎\n";
    echo "    5) Encode Semua typeシ︎\n";
    echo "    6) Install Bahanシ︎\n";
    echo "    x) Exitシ︎\n";
    echo "Pilih Nomor : ";
    switch(trim(fgets(STDIN,256)))
        {
            case 1:
                echo "Masukan Kata Yang Mau Di Encode : ";
                $kata = trim(fgets(STDIN,256));
                echo "Hasil :",md5($kata),"\n";
                exit();
            case 2:
                echo "Masukan Kata Yang Mau Di Encode : ";
                $kata = trim(fgets(STDIN));
                echo "Hasil :",base64_encode($kata),"\n";
                exit();
            case 3:
                echo "Masukan Kata Yang Mau Di Encode : ";
                $kata = trim(fgets(STDIN));
                echo "Hasil :",sha1($kata),"\n";
                exit();
            case 4:
                echo "Masukan Kata Yang Mau Di Encode : ";
                $kata = trim(fgets(STDIN));
                echo "Hasil :",crypt('md4',$kata);
                exit();
            case 5:
                echo "Masukan Kata Yang Mau Di Encode : ";
                $kata = trim(fgets(STDIN));
                foreach (hash_algos() as $v) {
                $r = hash($v, $kata, false);
                printf("%-12s %3d %s\n", $v, strlen($r), $r);
                }
                exit();
            case 6:
                echo "𝗦𝗘𝗗𝗔𝗡𝗚 𝗗𝗜 𝗜𝗡𝗦𝗧𝗔𝗟𝗟... ";
                echo "exit";
                system('pkg install git');
                echo "𝗦𝗨𝗗𝗔𝗛 𝗚𝗔𝗡";
                echo "exit";
                exit();
    
            case "x":
                exit();
        }
    // Close standard in..
    fclose(STDIN);
?>
