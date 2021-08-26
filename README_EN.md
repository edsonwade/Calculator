
**CALCULATOR**

Simple Calculator implementations using the 4 Pillars of OOP in PHP.<br/> 

The calculator performs operations as : <br/>
 Addition <br/>
 Subtract <br/>
 Division <br/>
 Multiplication<br/>

key functionality:<br/>
.Perform 4 arithmetic operations on<br/>
 two value specified by the user<br/>
 
.Show result of the calculation <br/>

The image down show the objects created and how their are implemented in the system..<br/>
![Calculator](https://user-images.githubusercontent.com/22649602/130883827-693a5d88-1ace-46ab-866b-5ef2edb0bc23.png) </br>

Implementation

Implemented OOP and SOLID principles in this program.
The system is represented by an abstract class Calculator(), which defines an abstract method that takes 2 arguments.
This method is implemented by the Multiplication(),Subtract(),Division(),Addition() classes which extend (inherit) from the abstract calculator() class.
The classes implement the execute() method, however each one presents a different behavior (Polymorphism). 









