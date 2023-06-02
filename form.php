<?php

//funkcija za upisivanje u json fajl 
function addToJson($ime_fajla, $something){
    if(!file_exists($ime_fajla) or filesize($ime_fajla) == 0){
        $userArray = array($something);
        $json_data = json_encode($userArray);
        file_put_contents($ime_fajla,$json_data);
    }else{
        $json_content = file_get_contents($ime_fajla);
        $json_content = json_decode($json_content);
        array_push($json_content, $something);
        $json_content = json_encode($json_content);
        file_put_contents($ime_fajla,$json_content);
    }
}

//produkti su niz objekata pa tako i treba da deklarisemo
$product = array();

//ime json fajla
$file_name = 'products.json';

//sa post metodom saljemo informacije 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    //citamo iz forme razlicite unose
    $product['name'] = $_POST['name'];
    $product['description'] = $_POST['description'];
    $product['price'] = $_POST['price'];
    $product['storage'] = $_POST['storage'];

    //ovo ispod samo kopirate ako hocete sliku da dodate 

    //Stores the filename as it was on the client computer.
    $file = $_FILES['slika'];
    $imagename = $_FILES['slika']['name'];
    //Stores the filetype e.g image/jpeg
    $imagetype = $_FILES['slika']['type'];
    //Stores any error codes from the upload.
    echo $imageerror = $_FILES['slika']['error'];
    //Stores the tempname as it is given by the host when uploaded.
    $imagetemp = $_FILES['slika']['tmp_name'];

    //The path you wish to upload the image to
    $imagePath = 'productImage\\';

    $image=basename($imagename);
    //$image=str_replace(' ','|',$image);

    
    $destination_path = getcwd().DIRECTORY_SEPARATOR;
    $target_path = $destination_path . $imagePath . $image;
    
    
    if(is_uploaded_file($imagetemp)) {
        if(move_uploaded_file($imagetemp, $target_path)) {
            echo "Sussecfully uploaded your image.";
        }
        else {
            echo "Failed to move your image.";
        }
    }
    else {
        echo "Failed to upload your image       .";
    }


    $product['image'] = $imagePath . $imagename;
    
    //ovde se zavrsava kod za sliku

}else{
    echo "nesto nije uredu";
}



//pozovemo funkciju
addToJson($file_name,$product);

//vrati nas na pocetni sajt
header("Location: nesto.php");

