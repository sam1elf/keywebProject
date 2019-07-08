<?php 
    define ("TITLE", "PHP | Test-Form");
    include "header.php";
    $today = new DateTime();

    #convert birthday input to select-option-dropdown
    #check for valid input before appending to file
    #secure input against injection attacks
?>

<body class="bg-dark text-secondary">
    <div class="container">
        <h1 class="mb-5 text-info">Array - Test</h1>
        <div class="row mx-auto mt-3">
            <div class="col-md-6 mb-5">
                <form action="" method="POST">
                    <label for="iFirstName" class="control-label">First Name</label>
                    <input type="text" class="form-control mb-3" name="iFirstName" value="<?php echo isset($_POST['iFirstName']) ? ($_POST['iFirstName']) : '' ?>">
                    <label for="iLastName" class="control-label">Last Name</label>
                    <input type="text" class="form-control mb-3" name="iLastName" value="<?php echo isset($_POST['iLastName']) ? ($_POST['iLastName']) : '' ?>">
                    <label for="iBirthDay" class="control-label">Date of Birth</label>
                    <input type="text" class="form-control mb-3" name="iBirthDay" placeholder="dd.mm.yyyy" value="<?php echo isset($_POST['iBirthDay']) ? ($_POST['iBirthDay']) : '' ?>">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <?php 

        /*
        function printFile() {
            $fileName = 'persons.txt';
            $myFile = fopen( $fileName, 'r') or die( 'file not found ');
            echo fread( $myFile, filesize($fileName)) . "<br />";
            fclose($myFile);
        }
        */

        function appendToFile() {
            $fileName = 'persons.txt';
            $myFile = fopen( $fileName, 'a' ) or die( "can't append to file");
            fwrite($myFile, "\n" . $_POST['iFirstName'] . ',' . $_POST['iLastName'] . ',' . $_POST['iBirthDay']);
            fclose($myFile);
        }

        //append values to file
        if (isset($_POST['submit'])) {
            appendToFile();
        }

        function printLines() {
            $myFile = fopen( 'persons.txt', 'r') or die( 'file not found ');
            $newArray = array();
            while (! feof($myFile)) {
                $arrayLine = explode(',', fgets($myFile));
                array_push($newArray, $arrayLine);
            }
            fclose($myFile);
            return $newArray;
        }
        $personen = printLines();


        ?>
        <div class="container">
            <div class="row mt-3">
        <?php
        foreach ($personen as $key => $value) {
        ?>

            <div class="col-md-* bg-warning text-dark text-center mb-2 w-25 mx-1 pt-3">
                <p>Name: <?php echo $personen[$key][0] ." ". $personen[$key][1];?></p>
                <p>Geburtstag: <?php echo $personen[$key][2];?></p>
                <p>Alter: <?php echo $today->diff(new DateTime($personen[$key][2]))->y;?></p>
            </div>

            <?php
        }
        ?>
            </div>
        </div>
        <?php



    include "footer.php";?>