<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php  
    $name = ": Nur Nadhirah binti Suhailay"; 
    $matric_number = ": AI220203";
    $course = ": Multimedia Computing";
    $year = ": 3";
    $address = ": No 118, Blok 5, Felda Lui Barat, 72120 Bandar Seri Jempol, Negeri Sembilan."
    ?> 
    
    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>
        </tr>  
        <tr>
            <td>Matric number</td> 
            <td><?php echo "$matric_number"; ?></td> 
        </tr> 
        <tr>
            <td>Course</td> 
            <td><?php echo "$course"; ?></td> 
        </tr> 
        <tr>
            <td>Year of study</td> 
            <td><?php echo "$year"; ?></td> 
        </tr> 
        <tr>
            <td>Address</td> 
            <td><?php echo "$address"; ?></td> 
        </tr> 
    </table> 
</body> 
</html>