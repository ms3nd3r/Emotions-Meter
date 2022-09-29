//一旦止めてます
function inputChange(event){
  msg1.innerText = happySlider.value;
  msg2.innerText = funSlider.value;
  msg3.innerText = sadSlider.value;
  msg4.innerText = angerSlider.value;
  }
  
  let happySlider = document.getElementById('happySlider');
  happySlider.addEventListener('input', inputChange);
  let msg1 = document.getElementById('msg1');

  let funSlider = document.getElementById('funSlider');
  funSlider.addEventListener('input', inputChange);
  let msg2 = document.getElementById('msg2');

  let sadSlider = document.getElementById('sadSlider');
  sadSlider.addEventListener('input', inputChange);
  let msg3 = document.getElementById('msg3');

  let angerSlider = document.getElementById('angerSlider');
  angerSlider.addEventListener('input', inputChange);
  let msg4 = document.getElementById('msg4');
