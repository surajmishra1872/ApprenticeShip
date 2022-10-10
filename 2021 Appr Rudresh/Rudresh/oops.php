Introduction  to object oriented Design Pattern:
===============================================

Design Pattern:
This means Programming paradigm (Approach of Programming ) or Methodology
Till now you would have used piece of code in repeated Manner.

In order to resolve the DRY(Donot Repeat Yourself) approach 
Hence we introduced concept of Functions.

Types of approaches
1. Monolythic : Code in repeated Fashion (Repeated Approach) 
All code will be written in single File itself

No one uses this is Industry
Procedural Approach


2. Polylithic : All code distributed in multiple files apaproach
	1. Functional Approach:
	2. Object Oriented Approach 
	3. Design Pattern
		There are total design pattern
		for example:
		1. Singleton Pattern
		2. Observer Pattern
		3. Adapter Pattern
		4. Factory Pattern
		5. Fascade Pattern



Functional Approach :

We devide the piece of code into blocks of functions.
1. Security (Because function does not private,public,protected[Access Modifier])
2. Context : Global or Local context problem arises with version 
3. Undefined Variable Errors (Donot have Garbage Collector)
4. Top to bottom approach

Object Oriented Approach
------------------------

It is a programing methodology or programming Paradigm
it is a software devlopment Mechanism with Additional Advantages
like
1. Security By using Access Modifier like public,protected, private
2. Context : Static or non static
		static  : object cannot be made
		non static : object can be made
		1. local
		2. global
			public
			private
			protected
			blank modifier (default) : Note that there is nno keyword for this.

			for example:
			1. public modifier
					functions: public function function_name();
					variables: public variable name 

			2. private modifier
					functions: private function function_name();
					variables: private variable name 

			3. protected modifier
					functions: protected function function_name();
					variables: protected variable name 

			4. default modifier	
					function : function	 function_name();
					default variables :
					var <variablename>

					Context Rules : same as public


3. Garbage Collector
if you do not initialise the variable
it will be by defaut Null

In Procedural	
$x;
exho $X; //undefined Variable $x;


In Oops
public $x;
private $x;
var $x;
protected $x;

echo $this->x //NULL

real time example
-----------------

consider a model

User_model
----------
class User_model{
	private $tablename = $db['prefix'].'users';
}

User_model
----------
class User_model{
	private $tablename = 'tbl_users';
}

4. Bottom to Top approach

if you use Procedural Approach 
==============================

$x;
echo $x;  undefined index in line No.1

Object oriented
class Test{
public $x;			←←←←←←←←←←←←←←←←←←←←←←←←←←←←↰
echo $this->x;									↑	
}												↑
												↑
// No output 									↑		
												↑		
As soon as we make object						↑
$obj = new Test(); //Instantiate <---Bottom→→→→

OOPL:
-----

Any programming	 language which follows oops concept or patterns are said to be oopl(s)

example to object Oriented Pattern 
**********************************

class Test{
	public $x; //variables inside class instance variable
	public $y; //variables inside class instance variable
	
	//function inside class = method
	public function add($x,$y){

			echo $x; //local  variable
			echo $y; //local  variable
		echo $this->x + $this->y; //instance

}

}

Basic terminology;
******************
1. instancxe variable : class level elements or variables
		1. All the variables defined inside class but outside the method
		2. All the variables wrapped inside class 
		3. all the  variables encaptulated(covered) inside a class

2. Local variables:
		1. Any variable outside the class
		2. any variable inside the class but inside the method

3. Method  :
		1. All functions defined inside class
		2. All functions wrapped inside class
		3. all functions encaptulated inside the class


class = variable + functions()
or
class = instance variable + methods()
or
multplying by wrapping Both side

wrapping(class) =wrapping(variable) + wrapping(functions())
wrapping(class) = wrapping(instance variable) + wrapping(methods())
 
 but wrapping = encapsulation
encapsulation(class) =wrapping(variable) + wrapping(functions())
encapsulation(class) = wrapping(instance variable) + wrapping(methods())

or in general
class is a enscaptulated version of variables and functions
variable defines properties
functions defines behaviour	


class = collection of properties + behaviour
	  = collection of states(attributes) + behaviour(actions())

for example

class Student{
	public $name;
	public $roll;
	public $class;

	public function scoreMarks(){
		}
	public function sayName(){
		}
	public function willstudy(){
		}

}

Question : 
You have table student 
student 
id |name 	| class		|marks|passed
convert the same Database schema using object oriented Approach.

Class Student{
	public $id;
	public $name;
	public $class;
	public $marks;
	public $passed;

	public function student_id(){
		return $this->id;
		}
	public function student_name(){
		return $this->name;
		}
	public function student_class(){
		return $this->class;
		}
	public function student_marks(){
		return $this->marks;
		}
	public function student_passed(){
		return $this->passed;
		}
	public function student(){

	echo $this->id;
	echo $this->name;
	echo $this->marks;
	echo $this->class;
	echo $this->passed;
}

}

This is Typical Example of student_model


how to create data
******************

Consider 3 records 

1001 | Ravi  |100 | 12th | yes → → → → →R1
1002 | Cahman|98  | 10th | no → → → → →R2
1003 | manas |10  | 8th  | yes → → → → →R3


Data = collection of Records or Rows
Each Row Represents a unique identity
Foe example
Each Unique Identity is a Entity
So each Entity Must be represented in a diagram called a Entity Diagram

Each Parameter like class,marks,passed,name is inter-related to Ravi
Each Entity is Inter-related
And Diagram Representation These Inter relation Among Entity is called  Er Diagram

student Table = Student Class
		name column = name variable
		marks column = marks variable
		rollno column = rollno variable
		id column = id variable
		
insert = add student method
update = delete student method
select = get student method

Rows   = object
Entity = Entity

Object is a real Existing entity

List of student

1001 | Ravi  |100 | 12th | yes → → → → →R1
1002 | Cahman|98  | 10th | no → → → → →R2
1003 | manas |10  | 8th  | yes → → → → →R3

student1=new Student();
student1->add_student(1001,"Ravi","12th","100","yes");

Dynamic:

$student = array(

array('id'=>'1001','name'=>'ravi','class'=>'12th','marks'=>'100','passed'=>'yes'),
array('id'=>'1002','name'=>'Chaman','class'=>'10th','marks'=>'98','passed'=>'yes'),
array('id'=>'1003','name'=>'Manas','class'=>'8th','marks'=>'10','passed'=>'no'),

);
$i=1;
foreach($student as $student){
	$student_obj.$i = new Student();
	$student_obj.$i->add_student($student['id'],$student['name'],$student['class'],$student['marks'],$student['passed']);
	$i++;
}

Date : 23/02/2021






















