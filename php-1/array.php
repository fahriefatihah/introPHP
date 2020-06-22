<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        print_r($kids);
        echo "<br>";
        $adults = array ("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        print_r($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ; // Berapa panjang array kids
        echo count($kids);
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";

        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " ;// Berapa panjang array adults
        echo count($adults);
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        echo "<br>";
        
        // Lanjutkan

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        echo "<h3> Asosiatif Array (Array Multidimensi) </h3> ";
        $budakbapak=array(
            array("Will Byers","12","Will The Wise","Alive"),
            array("Mike Wheeler","12","Dungeon Master","Alive"),
            array("Jim Hopper","43","Chief Hopper","Deceased"),
            array("Eleven","12","El","Alive")
        );

        echo "Name : ".$budakbapak[0][0]."<br>"."Age : ".$budakbapak[0][1]."<br>"."Aliases : ".$budakbapak[0][2]."<br>"."Status : ".$budakbapak[0][3]."<br>";
        echo "<br>";
        echo "Name : ".$budakbapak[1][0]."<br>"."Age : ".$budakbapak[1][1]."<br>"."Aliases : ".$budakbapak[1][2]."<br>"."Status : ".$budakbapak[1][3]."<br>";
        echo "<br>";
        echo "Name : ".$budakbapak[2][0]."<br>"."Age : ".$budakbapak[2][1]."<br>"."Aliases : ".$budakbapak[2][2]."<br>"."Status : ".$budakbapak[2][3]."<br>";
        echo "<br>";
        echo "Name : ".$budakbapak[3][0]."<br>"."Age : ".$budakbapak[3][1]."<br>"."Aliases : ".$budakbapak[3][2]."<br>"."Status : ".$budakbapak[3][3]."<br>";
   ?>
</body>
</html>