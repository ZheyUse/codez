(function(){
  // Matrix background
  const canvas = document.getElementById('matrix');
  if(!canvas) return;
  const ctx = canvas.getContext('2d');

  let fontSize = 16;
  let columns = 0;
  let drops = [];

  function resize(){
    const parent = canvas.parentElement || document.body;
    const rect = parent.getBoundingClientRect();
    canvas.width = Math.max(1, Math.floor(rect.width));
    canvas.height = Math.max(1, Math.floor(rect.height));
    fontSize = Math.max(12, Math.floor(rect.width / 140));
    columns = Math.floor(canvas.width / fontSize) || 1;
    drops = new Array(columns).fill(1);
  }

  function draw(){
    ctx.clearRect(0,0,canvas.width,canvas.height);
    // subtle fade trail
    ctx.fillStyle = 'rgba(0, 0, 0, 0.06)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    // brighter brand-matching green for clarity
    ctx.fillStyle = 'rgba(155,202,61,0.98)';
    ctx.font = fontSize + 'px monospace';
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$#%?@';

    for(let i = 0; i < drops.length; i++){
      const text = chars.charAt(Math.floor(Math.random() * chars.length));
      ctx.fillText(text, i * fontSize, drops[i] * fontSize);
      if(drops[i] * fontSize > canvas.height && Math.random() > 0.975) drops[i] = 0;
      drops[i]++;
    }

    requestAnimationFrame(draw);
  }

  window.addEventListener('resize', resize);
  // initialize when DOM ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function(){ resize(); draw(); });
  } else {
    resize(); draw();
  }
})();
