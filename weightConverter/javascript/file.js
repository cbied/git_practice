document.getElementById('lbsInput').addEventListener('input', function(weight) {
  let lbs = weight.target.value;
  document.getElementById('gramsOutput').innerHTML = (lbs/0.0022046).toFixed(2);
  document.getElementById('kgOutput').innerHTML = (lbs/2.2046).toFixed(2);
  document.getElementById('ozOutput').innerHTML = lbs*16;
});
