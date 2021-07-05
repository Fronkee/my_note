<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JsNOte</title>
</head>
 <style>
  body{
      background-color:black;
      color:white;
      margin:0 200px;
  }
   h1,h2,h3,h4,h5,h6{
       color:red;
   }
   a{
       text-decoration:none;
       color:green;
   }
 </style>
 <script> 
   let list = document.querySelectorAll("div >ul li");
    console.log(list.length);
    
</script>
<body>
      <div > 
      <h1 align ="center" >JavaScirpt Note<br>
          <?php
           for($i=1;$i < 15; $i++){
               echo " . ";
           }
          ?>

      </h1><br>
      
      
    <b><ul style="list-style-type:disc;">
    <h3>Selector </h3>
        <li>var name = document.getElementbyId("id_name");</li>
        <li>name.style.color="red";</li>
        <li>name.style.fontsize= 130 + "px";</li>
        <li>document.getElementById("id_name").style.color="red";</li>
         
        <li>document.querySelector(".or# name")</li>
       
    </ul></b>
    <hr>
    <b><ul >
    <h3>State </h3>
        <li>let x = 20 or "mgmg";</li>
        <li>let <= variable keyword</li>
        <li>x <= identifier name</li>
        <li> <i style="color:red;font-size:20px;">=</i> <= assignment opreator</li>
         
        <li>20 <= number value</li>
        <li>"mgmg" <= string value</li>
        <li><i style="color:red;font-size:20px">;</i> <= end of statement</li>
       
    </ul></b>
    
    <b><ul >
    <h3>State  </h3>
       <li>let name="Aung Aung"</li>
        <li>document.querySelector("#_name").innerText = name;</li>
        <li>console.log(typeof name);</li>
       <br>
       <li>name =age < 20 <i style="color:green;">? </i>"mgmg" <i style="color:red;">: </i> "aungaung" </li>
       <li>undefined</li>
    </ul></b>


    <p> - console.warn() <= yellow color</p>
    <p> - console.error() <= red color</p>
    <p> - console.clear(); delete </p>
    
      <p>- console.time("Time:S")<br> console.timeEnd("Time:S")</p>
          <hr>
      <b><ul >
    <h3>Naming Convention  </h3>
       <li>FirstName <= pascale case</li>
       <li>first_name <= underscore convention</li>
       <li>firstNameSir <= camel case</li>
       <li>Frist_Name <= snake case,const variable</li>
    </ul></b>


    <b><ul >
    
    <h3>JavaScirpt Array  </h3>
       <li>let name = "mgmg" <= single value</li>
       <li>let names = ["mgmg","agag","susu",20,200] <= multiple values</li>
       <li>console.table(names) <=talbe for array output</li>
       <li>console.log(names[0]) <= output for mgmg</li>
       <li>console.log (names <i>. length</i>) <= 5 </li>
    </ul></b>
   <hr>
    <b><ul >
    <h3>JavaScirpt Object { }</h3>
       <li>let value = { <br><br>
            fname : "aung",<br><br>
            lname : "su", <br><br>
            family :[1,2,3,"u may"], <= arry in object<br><br>
            own:{<br>
               car : "toyota",
               bike :"two"<br>
            }, <= object in object<br><br>

            doIt:function (){<br>
                console.log(this.name) <= function in object; <br>
            }<br>

       }</li>
       <li>let json =JSON.stringify(person); <= change object to json </li>
       <li>let obj = JSON.parse(json); <= change json to object</li>
         <p id="red">
       <li>value.fname</li>
       <li>value.family[3]</li>
       <li>value.own.bike</li>
       <li>vlaue.doIt()</li></p>
    </ul></b>

  
    <b><ul >
    <h3>State  </h3>
       <li>let name="Aung Aung"</li>
        <li>document.querySelector("#_name").innerText = name;</li>
        <li>console.log(typeof name);</li>
       <br>
       <li>name =age < 20 <i style="color:green;">? </i>"mgmg" <i style="color:red;">: </i> "aungaung" </li>
       <li>undefined</li>
    </ul></b>


    <p> - console.warn() <= yellow color</p>
    <p> - console.error() <= red color</p>
    <p> - console.clear(); delete </p>
    
      <p>- console.time("Time:S")<br> console.timeEnd("Time:S")</p>
          <hr>
      <b><ul >
    <h3>Naming Convention  </h3>
       <li>FirstName <= pascale case</li>
       <li>first_name <= underscore convention</li>
       <li>firstNameSir <= camel case</li>
       <li>Frist_Name <= snake case,const variable</li>
    </ul></b>

   <hr>
    <b><ul >
    <h3>Conditional operator  </h3>
       <li><h4>==</h4></li>
       <li><h4>===</h4></li>
       <li><h4><</h4></li>
       <li><h4><=</h4></li>
       <li><h4>></h4></li>
       <li><h4>=></h4></li>
       <li><h4>!=</h4></li>
    </ul></b>
   <hr>
    <b><ul >

    <b>
     <ul>
       <h3>Control flow</h3>
       <li>if,if else,if-else if-else<br>
        switch  <= Conditional statement
       </li><br>
       <li>for,while,do while, for in <br> foreach <= looping</li>
        <hr>
       <h3>If else if else Statement</h3>
        <li type="none">
          if(20 == 20 ){<br>
           console.log("yes")<br><br>
          }else if(20==10){<br><br>
            console.log("NO")<br><br>
          }else if(20==11){<br><br>
            console.log("No")<br><br>
          }else{
              default 
          }
        </li>
         <br><hr>
        <li type="none"><h3>Switch case statement</h3>
             let color = "red";<br>
              switch(color){<br>
                  case "condition": console.log("t");break;<br>
                  case "condition": console.log("t");break;<br>
                  case "condition": console.log("t");break;<br>
                  case "condition": console.log("t");break;<br>
                  default:console.log("thank");<br>
              }
        </li>
        <hr>
         <li type="none"><h3>for loop</h3>
           for(starting value,boolean expression,increment){<br>
             console.log();<br>
           }
         </li>
         <hr>
         <li type="none"><h3>While loop</h3>
           let i=0; <= initial value<br>
           while(i < 5){ <= boolean expression<br>
              console.log("yes"); <= answer out <br>
               i++; <= increment 
           }
         </li>
         <hr>
          <li type="none"><h3>forEach</h3>
            let ary=new Array(1,2,3,4,5);<br>
              ary.forEach((val,i) =>{ i<=default increment of foreach <br>
               console.log(val); <br>

              });
          </li><br>
          <li type="none"><h3>for in loop</h3>
            let ary=new Array(1,2,3,4,5);<br>
               for(x in ary){<= x is answer out key value <br>
                console.log(ary[x]);
              };
          </li><br>
          <li type="none"><h3>Map loop</h3>
            let ary=new Array(1,2,3,4,5);<br>
                ary.map((an) => {<br>
                 console.log("");<br>
                }); <= map loop can be loop Array of object looping faster than foreach
          </li><br> 
          <li>let ind = users.findIndex(user => user.age == 23);<br>
              let users=[{"name" : "aung","age":20},{"name":"su","age":23}]; <= array of object<br>
          </li><br>
          <li type="none"><a href="https://lipsum.com/" target="_blank">loreum lipsum >>></a> </li>
     </ul>
    </b>
    <hr>
       <ol>
          <h3>Date</h3>
         <li>let date = new Date();</li>
       </ol>
       <hr>
       <ol>
         <h3>Math Object</h3>
          <li>Math.PI <= value of PI</li>
          <li>Math.E</li>
          <li>Math.round(value) <=match.round can find close the full number of decimal value 2.2 0r 2.5 </li>
          <li>Math.ceil(num)<= look above the decimal number </li>
          <li>Math.floor(num)</li>
          <li>Math.sqrt(num) <= square root value</li>
          <li>Math.abs(num) <= absolute value</li>
          <li>Math.pow(4,4) <= find power</li>
          <li>Math.min(4,5) <= find the small number</li>
          <li>Math.max(4,5)<= find the large number</li>
          <li>Match.random();<= find the random number</li>
       </ol>
     <hr>
      <ol>
        <h3>Type Converting</h3>
         <li>String(num) <= Change String type</li> 
         <li>num.toString() <= Change String type </li>
         <li>Number(num)<= Change Number type</li>
         <li>parseInt(num) <= interger value</li>
         <li>parseFloat(num) <= decimal value</li>
         <li>Number(str).toFixed(3)</li>
           
      </ol>
     <hr>
      <ul>
         <h3>Template Literal</h3>
         <ul>
           <li>let my_data = '<h3>'+ data.name +'</h3><ul><li>Father :'+ <br>
               data.parents[0] +'</li><li>Mother :'+data.parents[1] + <br>
               '</li><li>Brother :'+data.borther +<br>
               '</li><li>Sister :'+data.sister +'</li></ul>'; <= Old style</li>
         </ul>
          <br>
         <li style="color:red;font-size:30px;" type="none "> `${ obj } ` <= new style</li>
      </ul>
      <hr>
       <ul type="none">
          <h3>Function</h3>
          <li>function doIt(name = "aung",age =20){<br>
             console.log(~Name is${name} and age is${age}~)<br>
          }</li>
           <hr>
          <li>let dd = function(){<br>
             console.log("Anonymous");<br>
           } </li><hr>
          
          <li>(function(){<br>
             console.log("Auto Invoke function");<br>
          })();
          </li><hr>
          <li>let fun = ()=>{<br>
            console.log("No need function Keyword");<br>
          };</li><hr><br>
          <li style="color:green;">let fun = () 
          => console.log("no need function keyword and carli bracket"); <br></li><br><hr><br>
          <li>(() =>console.log("Function Expression"))();<br>
          </li><br>
       </ul><hr>
       <ul type="square">
         <h3>Array</h3>
       <!-- <li>Array.isArray(value) <= check is array or not</li>
        <li>array.indexOf(8) <= Find array of index number</li>
        <li>array.push(300) <= add value into array of end</li>
        <li>array.unshift(350);<= add value into array of start</li>
        <li>array.pop(9); <= delete last the array of value </li>
        <li>array.shift(9)<= delete first the array of value</li>
        <li>array.splice(index,count)</li>
        <li>array.reverse();</li>
        <li>array.concat(array2)</li>
       </ul><hr><br> -->
     <?php
       $array = [
              "Array.isArray(value) <= check is array or not",
              "array.indexOf(8) <= Find array of index number",
              "array.push(300) <= add value into array of end",
              "array.unshift(350);<= add value into array of start",
              "array.pop(9); <= delete last the array of value",
              "array.shift(9)<= delete first the array of value",
              "array.splice(index,count)",
              "array.reverse()",
              "array.concat(array2) <= join the two array"
             ];
             foreach($array as $val){
                echo"<li>$val</li><br>";
             } 
     ?>
     </ul><hr>
     <ul type="square">
       <h3>Date Object</h3>
       <li>let date= new Date(); </li><br>
       <li>date.getDay();</li><br>
       <li>Date.now();</li><br>
       <li>date.getDate();</li><br>
       <li>date.getMonth()+1</li><br>
       <li>date.getFullYear()</li><br>
       <li>date.getHours();</li><br>
       <li>date.getMinutes();</li><br>
       <li>date.getSeconds();</li><br>
       <li>date.getMilliseconds();</li><br>
       <li>date.getTime(); <= January 1 1970</li><br>
       <li>let date = new Date("6/30/2000 10:5:22")</li><br>
       <li>date.setDate(29);</li><br>
     </ul><hr>

     <ul>
      <h3>Array Sorting</h3>
       <p>let ary = [87,45,6,2,3,1,7,64]</p>
       <li>ary.sort();  </li><br>
       <li>ary.sort((x,y)=>x-y) <= x-y smallest to largest and y-x largest to smallest</li><br>
       <li>ary.find(x => x < 3) can find smaller than three</li><br>
     </ul><hr>

      <ul>
        <h3>Scope Var,Let,Const</h3>
        <li><h4>var</h4> <= keyword is Golblal variable,can see Window Object</li>
        <li><h4>Let</h4> <= keyword is Local Variable,can't see Window Object</li>
        <li><h4>let</h4><= let keyword cann't use double time at same identifier name</li>
        <li><h4>const</h4> <= const not change any value</li>
      </ul><hr>
      <ul>
      <h3>String Properties and Methods</h3>  
      <li>Escape sign =>\</li><br>    
      <li>string.concat("-",variale)</li><br>
      <li>str.toUpperCase();</li><br>
      <li>str.toLowerCase();</li><br>
      <li>str.laslastIndexOf();</li><br>
      <li>str.charAt(index_number);</li><br>
      <li>str.[str.length-1] <= get the last string</li><br>
      <li>str.substr(0,3)</li><br>
      <li>str.slice(-4) or (0,4) <= (-4)at last number , (0,4) at first count number </li><br>
      <li style="color:yellow;">str.split(" ") <= store Arry value </li><br>
      <li>str.replace("original value","change vlaue")</li><br>
      </ul><hr>

      <ul>
        <h3>Window Object</h3>
        <li>window.close();</li><br>
        <li>window.alert(234);</li><br>
        <li>prompt();</li><br>
        <li>confirm(yes or no);</li><br>
        <li>window.innerHeight();</li><br>
         <li>window.innerWidth();</li><br>
        <li>window.scrollY</li><br>
        <li>window.location.href = "";</li><br>
        <li>window.reload();</li><br>
        <li>window.location.search</li>
      </ul><hr>

      <ul type="none">
         <h3>Document object Model (DOM)</h3>
         <li>console.log(document);</li><br>
         <li>console.log(document.all);</li><br>
         <li>console.log(document.all[0]);</li><br>
         <li>console.log(document.head)</li><br>
         <li>document.URL</li><br>
         <li>docuemnt.domain</li><br>
         <li>document.link</li><br>
         <li>document.script</li><br>
       
      </ul><hr>

       <ul>
         <h3>Query Selector</h3>
         <li>docuemnt.querySelector() & .querySelctorAll()</li><br>
         <li> let btn = document.querySelector("#btn");<br>
                btn.onclick = () => alert(123);</li><br>
         <li> document.querySelector("#btn").addEventListener('click', function() {<br>
                alert(12445);<br>
              });</li>  <br>     
              <li>document.querySelector("ul li:first-child>a")</li><br>
              <li>document.querySelector("ul li:nth-of-type(2) > a")</li>
              <li>document.querySelector("ul li:nth-child(2) > a")</li>

       </u><hr>

        <ul>
          <h3>Increment and Decrement</h3>
           <li>querySelector.setUp(); <= increment</li><br>
           <li>querySelector.setDown();<= decrement</li><br>
        </ul><hr>

       <ul type="none">
         <h3>Travesting_Nodes</h3>
          
         <li> 1 <= Element</li><br>
         <li>2 <= Attributes(deprecate)</li><br>
         <li>3 <= text node</li><br>
         <li>8 <= Comment</li><br>
         <li>9 <= Document ItfSelf</li><br>
         <li>10 <= Doctype</li><br><hr>
         <li>childNodes</li><br>
         <li>list.childNodes.nodeType</li><br>
         <li>textContent</li><br>
         <li>nextSibling</li><br>
         <li>previousSibling</li><br>
         <li>childElementCount</li><br>
         <li>firstChild</li><br>
         <li>firstElementChild</li><br>
         <li>lastElementChild</li><br>
         <li>children</li><hr>

         <ul>
           <h3>Create Element</h3><br>
           <li>createTextNode("");</li><br>
           <li>createElement("a");</li><br>
           <li>a.setAttribute("href","#")</li><br>
           <li>appendChild(); <= add last place</li><br>
           <li>.prepend(); <= add first place</li><br>
         </ul><hr>
         <ul>
           <h3>Replacing Elements</h3>
           <li>.className=("one")</li><br>
           <li>.id="one"</li><br>
           <li>.replaceChild(new , old)</li>
           <li>old.parentNode;</li>
           <li>childNode[0].getAttribute("alt")</li>
         </ul><hr>

         <ul>
           <h3>EventListener</h3>
           <li>onclick -> function</li><br>
           <li>addEventListener('click',call back function)<=addEventListener no need (on)key</li><br>
           <li>dblclick <= double click</li><br>
           <li>e.target.innerText <=mouseEvent</li> <br>
           <li>mousedown & mouseup</li><br>
           <li>mouseenter</li><br>
           <li>mouseleave == mouseout</li><br>
           <li>mouseover & mousemove</li>
         </ul><hr>
         <ul>
           <h3>Form Events</h3>
           <li>e.preventDefault(); </li><br>
           <li>console.log(input.value)</li><br>
           <li>keydown & keyup</li><br>
           <li>keypress & focus & blur & cut & paste & change</li><br>
         </ul><hr>

         <ul>
           <h3>Local Storage</h3>
           <li>localStorage.setItem('name',value)</li><br>
           <li>JSON.stringify(object) <= change string</li><br>
           <li>JSON.parse(String)<= change Object</li><br>
           <li>localStorage.getItem('name') </li><br>
           <li>localstroge.removeItem('name')</li>
         </ul><hr>
         <ul>
           <h3>Session Storage</h3>
           <li>SessionStorage.setItem('name',value)</li><br>
           <li>sessionStorage.getItem('name')</li><br>
           <li>sessionStorage.removeItem('name')</li><br>
         </ul><hr>
         
         <ul>
           <h3>OOP javaScript(Object Oriented Programming)</h3>
           <li>ecmas ->5 OOP =>Prototype</li><br>
           <li>ecmas ->6 OOP => Class</li><br><hr>
           <h3>Constructor Function</h3>
           <li>function Person() {<br><br>
               <i style="border:1px solid #fff;padding:5px;">this.name</i> = "mgmg";  <= ; <br><br>
               <i style="border:1px solid #fff;padding:5px;">this.age</i> = 20; &nbsp; <= ;<br><br>
             }
           </li>
         </ul><hr>

         <ul>
           <h3>Bulid in Constructor</h3>
           <li>let name = new String("mgmg") <= object type</li><br>
           <li>let num = new Number(2) <= object</li><br>
           <li>let funt = new Function( 'x','y','return x+y' )</li><br>
           <li>let bol = new Boolean();</li><br>
           <li>let boj = new Object({"name" : "aung aung"});</li><br>
           <li>let reg = new RegExp('\w+');</li><br>
         </ul><hr>

         <ul>
           <h3>Prototype</h3>
           <li>function Person() {<br><br>
               <i style="border:1px solid #fff;padding:5px;">this.name</i> = "mgmg";  <= ; <br><br>
               <i style="border:1px solid #fff;padding:5px;">this.age</i> = 20; &nbsp; <= ;<br><br>
             }
           </li><br>

           <li>Person.prototype.getAge = function () {<br>
                 return this.age;<br>
           }</li><br>
         </ul><hr>

         <ul>
           <h3>Prototype inherientance</h3>
           <li>function Toyota( name,speed ) {<br>
              Car.call(this,name,speed);<br>
           }<br>
           Toyota.prototype = Object.create( Car.prototype );<br>
           </li>
         </ul>


    </div>
    
</body>
</html>