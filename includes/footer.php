<footer>
  <?= $footerText ?? 'forge · bygget med ViaVi Forge v' . FORGE_VERSION . ' · <a href="https://viavi.dk/">viavi.dk</a>' ?>
</footer>
<script>
window.addEventListener('scroll',()=>{
  const p=(window.scrollY/(document.body.scrollHeight-window.innerHeight))*100;
  document.getElementById('sp').style.width=p+'%';
});
function rip(btn,e){
  if(!e) return;
  const r=document.createElement('span');
  r.className='rspot';
  const rect=btn.getBoundingClientRect();
  r.style.cssText=`width:${btn.offsetWidth*2}px;height:${btn.offsetWidth*2}px;left:${e.clientX-rect.left-btn.offsetWidth}px;top:${e.clientY-rect.top-btn.offsetWidth}px`;
  btn.appendChild(r);
  setTimeout(()=>r.remove(),500);
}
</script>
</body>
</html>
