Methods of the class missing!!!! - Review

* object / getter methods
The object will have 2 properties given for the class/key wanted.
When creating a new object the data for the properties will be given.
These properties will be set at the beginning and than we concatenate the get with the name given so that it will be dynamic and every getdata would be possible.
we will return the 2 properties in coresponding values
  
  Methods:
    * 1 setClass
    * 2 getClassData

* class Metadata : Will return a configuration array to define the relation between [object getter method] and [result name]
Here we set the configuration to say what object properties corrsponds to what key in the later created array.
So a sort of mapping / getUsername will be Username
  
  Methods:
    * setConfig -> set the configuration to map a getmethod to a key value
    * getConfig -> a method to get the configuration data

* class Normalizer : Will convert the object to a resulting array
With the object and Metadata as given data we create an associativeArray
so the 2 properties from the object will generate one key with value in the array result
  
  Methods:
    * 1 setData
    * 2 getResult

* class Serializer : will convert the resulting array to a given format (Json OR PHPNative)
serialize — Generates a storable representation of a value
with serialize we prepare the data to put as example in a csv file
json_encode — Returns the JSON representation of a value
convert the output to a json format and we can than write to a .json file
the result array from the normalizer has to be given to the serializer function.
when the format is set to json the array is encoded to json format and saved as file.json
if the format is set to nativePHP we serialize the array and put it into a csv file (or another one)
  
  Methods:
    * setOutputType ->
    * writeToFile ->
    * outputSerialize ->

RESULT:

$object = new Object();

new Metadata() -> [configuration];

[configuration] + $object -> new Normalizer() -> [array result];

[array result] -> new Serializer() -> [Json OR PHPNative];
