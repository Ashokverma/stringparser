<?php

$a = "28 kaleem 14 ayush 32 kashish 53 rahul 9 Ashok 56 Samir 76 pritam 65 sumit";

# exploding data after space 
$array = explode(' ', $a);


# creating $roll that save data of roll number 
$roll = array();

# creating $roll that save data of roll number 
$name = array();


# Running for Loop to parse given $array 
for($i = 0 ; $i < count($array) ; $i++ ){

    if(is_numeric($array[$i])){
        #checking Element of Array is numeric or not if numeric then save to roll number 
        array_push($roll,$array[$i]);
    }else{
        #otherwise save t string 
        array_push($name,$array[$i]);
    }

}

# merging two array key=>value where key is $roll & value is $name
$data_students = array_combine($roll, $name);

//echo "<pre>";
#var_dump($data_students);


# Sorting Array in Assending Order According to the key 

ksort($data_students);

#var_dump($data_students);



#making Html Table Header
$table_head =  "<table><tr><th>ROLL NUMBER</th><th>NAME</th></tr>";

#making Html Table Footer
$table_footer = "</table>";

#Defining Global Variable for Table Data for later means it is empty variable later adding markup of html inner bdy
$table_data = "";

#stable counter position of array for later traversing array 
reset($data_students);

for($i = 0 ; $i < count($data_students); $i++){

    # adding data to $table_data
    # Key means Curreent Key (Index) of element of array
    # current means Current Value of element of array
    $table_data .= '<tr>
                        <td>'.key($data_students).'</td>
                        <td>'.current($data_students).'</td>
                    </tr>';


    #changing the Next Array Element

    next($data_students);

    # loop will continue

}


#creating Css 

$css = "<style>table,th,td,tr { border:1px solid black; background-color:yellow;}</style>";


#making Html Table Rendering

echo $css;
echo $table_head.$table_data.$table_footer;


?> 
