var counter = 0;
        function swap(selected)
        {
         //the div ids won't display when the page loads
         document.getElementById('home').style.display = 'none';
         document.getElementById('coke').style.display = 'none';
         document.getElementById('sprite').style.display = 'none';
         document.getElementById('pepper').style.display = 'none';
   //then display the selected page
         document.getElementById(selected).style.display = 'block';
        }
      function changeLook()
      {
        counter += 1;
        switch(counter){
          case 1:
            document.getElementById('body').style.backgroundColor = 'lightblue';
            document.getElementById('header').style.backgroundColor = '#FF0000';
            document.getElementById('footer').style.backgroundColor = '#FF9900';
            break;
          case 2:
            document.getElementById('body').style.backgroundColor = '#FF6600';
            document.getElementById('header').style.backgroundColor = '#FF9999';
            document.getElementById('footer').style.backgroundColor = '#996699';
            break;
          case 3:
            document.getElementById('body').style.backgroundColor = 'coral';
            document.getElementById('header').style.backgroundColor = 'darkcyan';
            document.getElementById('footer').style.backgroundColor = 'dimgrey';
            break;
          case 4:
            document.getElementById('body').style.backgroundColor = 'lightgrey';
            document.getElementById('header').style.backgroundColor = 'chocolate';
            document.getElementById('footer').style.backgroundColor = 'dimgrey';
            break;
        }
        //change page style dynamically
       /* document.getElementById('theme').style.backgroundColor = '#770000';
        document.getElementById('theme').style.fontFamily = 'arial, sans-serif';
        document.getElementById('theme').style.color = '#ffffff';*/
      } 
      function countUp()
      {
        //incremental counter code 
        counter += 1;
        //assign the counter value to the result html
        document.getElementById('result').innerHTML =  counter;
      } 
      function changeColor(newColor)
      {
        var elem = document.getElementById('para1');
        elem.style.color = newColor;
      }