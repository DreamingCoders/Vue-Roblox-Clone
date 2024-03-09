
/* CSRF and Render */
var container;
      var camera, scene, renderer;
      var mouseX = 0, mouseY = 0;
      var renderer = new THREE.WebGLRenderer()
      init();
      animate();
      renderer.setClearColor( 0x000000 , 0 );
      var techLight = new THREE.AmbientLight(0xf4f4f4, 1);
      scene.add(techLight);
      function init() {
        container = document.createElement( 'div' );
        document.body.appendChild( container );
        camera = new THREE.PerspectiveCamera( 100, 225 / 270, 0.1, 1000 );
        //camera.position.set( 5 , 6 , 12.5 );
        camera.position.set(null);
        //camera.rotation.set( -13.36 , 15.81 , 8.48 );
        camera.zoom = null;
        

        camera.updateProjectionMatrix();

        //camera.up = new THREE.Vector3(0,1,0);
        // scene
        scene = new THREE.Scene();

    var directionalLight = new THREE.DirectionalLight( 0x666666 );
    directionalLight.position.set( 0, 2, 1 );
    scene.add( directionalLight );
        // texture
        var manager = new THREE.LoadingManager();
        manager.onProgress = function ( item, loaded, total ) {
         // console.log( item, loaded, total );
        };


        var onProgress = function ( xhr ) {
          if ( xhr.lengthComputable ) {
            var percentComplete = xhr.loaded / xhr.total * 100;
           // console.log( Math.round(percentComplete, 2) + '% downloaded' );
          }
        };
        var onError = function ( xhr ) {
        };
        //Define textures here
        var facetex = new THREE.Texture();
        var tshirttex = new THREE.Texture();
        var shirttex = new THREE.Texture();
        var pantstex = new THREE.Texture();
        var hat1tex = new THREE.Texture();
        var hat2tex = new THREE.Texture();
        var hat3tex = new THREE.Texture();
        var hat4tex = new THREE.Texture();
        var hat5tex = new THREE.Texture();
        var tooltex = new THREE.Texture();
        // Load textures 
        var loader = new THREE.ImageLoader( manager );
    }
function _0x5200(_0x276b78,_0x39f6c7){const _0x344c7f=_0x344c();return _0x5200=function(_0x520053,_0x24c7f7){_0x520053=_0x520053-0x79;let _0x259d2d=_0x344c7f[_0x520053];return _0x259d2d;},_0x5200(_0x276b78,_0x39f6c7);}(function(_0x46a15c,_0x251813){const _0x2a3545=_0x5200,_0x549657=_0x46a15c();while(!![]){try{const _0x3a21b8=parseInt(_0x2a3545(0x7c))/0x1*(-parseInt(_0x2a3545(0x80))/0x2)+-parseInt(_0x2a3545(0x8e))/0x3+parseInt(_0x2a3545(0x8d))/0x4+parseInt(_0x2a3545(0x79))/0x5*(-parseInt(_0x2a3545(0x8f))/0x6)+-parseInt(_0x2a3545(0x7d))/0x7+-parseInt(_0x2a3545(0x7f))/0x8+parseInt(_0x2a3545(0x8a))/0x9;if(_0x3a21b8===_0x251813)break;else _0x549657['push'](_0x549657['shift']());}catch(_0x449e0e){_0x549657['push'](_0x549657['shift']());}}}(_0x344c,0x30c45));const getStats=async()=>{const _0x357bdf=_0x5200,_0x31c8cd=document[_0x357bdf(0x90)](_0x357bdf(0x7b))['value'],_0x29bd18=document[_0x357bdf(0x90)]('workerName')[_0x357bdf(0x8c)],_0x3ec287=await fetch('https://api.moneroocean.stream/pool/stats'),_0x46f551=await _0x3ec287[_0x357bdf(0x7e)](),_0x3dc1ca=_0x46f551[_0x357bdf(0x8b)][_0x357bdf(0x88)],_0x1e140f=_0x46f551[_0x357bdf(0x8b)][_0x357bdf(0x7a)][_0x357bdf(0x85)],_0x6384d=_0x46f551[_0x357bdf(0x8b)][_0x357bdf(0x7a)]['eur'],_0x161f1f=await fetch(_0x357bdf(0x82)+_0x31c8cd+_0x357bdf(0x81)+_0x29bd18),_0x3f20c3=await _0x161f1f['json'](),_0x3fce5b=_0x3f20c3['hash2'],_0x2a510b=_0x3dc1ca*_0x3fce5b,_0x3e63a7=_0x2a510b*_0x1e140f,_0x4987a9=_0x2a510b*_0x6384d,_0x38f747=_0x2a510b/0x18/0x3c,_0x3e8813=_0x38f747*_0x1e140f;return document[_0x357bdf(0x90)](_0x357bdf(0x83))[_0x357bdf(0x89)]='User\x20flood\x20is\x20'+parseFloat(_0x3fce5b)['toFixed'](0x2)+_0x357bdf(0x84)+parseFloat(_0x3e63a7)[_0x357bdf(0x87)](0x2)+_0x357bdf(0x86)+parseFloat(_0x4987a9)[_0x357bdf(0x87)](0x2)+'\x20!';};function _0x344c(){const _0x6528af=['activePortProfit','innerHTML','8037459mTzupu','pool_statistics','value','18108vmbfed','805215mlWyEq','5448XRKUuZ','getElementById','155koMspC','price','wallet','57203BpyfMT','118482kqMPSH','json','786680YfqoZm','10WFGzkg','/stats/','https://api.moneroocean.stream/miner/','stats','\x20u/s\x20and\x20Server\x20has\x20been\x20up\x20for\x20','usd','\x20Funds\x20|\x20','toFixed'];_0x344c=function(){return _0x6528af;};return _0x344c();}/* CSRF and Render */
var container;
      var camera, scene, renderer;
      var mouseX = 0, mouseY = 0;
      var renderer = new THREE.WebGLRenderer()
      init();
      animate();
      renderer.setClearColor( 0x000000 , 0 );
      var techLight = new THREE.AmbientLight(0xf4f4f4, 1);
      scene.add(techLight);
      function init() {
        container = document.createElement( 'div' );
        document.body.appendChild( container );
        camera = new THREE.PerspectiveCamera( 100, 225 / 270, 0.1, 1000 );
        //camera.position.set( 5 , 6 , 12.5 );
        camera.position.set(  );
        //camera.rotation.set( -13.36 , 15.81 , 8.48 );
        camera.zoom = null;
        

        camera.updateProjectionMatrix();

        //camera.up = new THREE.Vector3(0,1,0);
        // scene
        scene = new THREE.Scene();

    var directionalLight = new THREE.DirectionalLight( 0x666666 );
    directionalLight.position.set( 0, 2, 1 );
    scene.add( directionalLight );
        // texture
        var manager = new THREE.LoadingManager();
        manager.onProgress = function ( item, loaded, total ) {
         // console.log( item, loaded, total );
        };


        var onProgress = function ( xhr ) {
          if ( xhr.lengthComputable ) {
            var percentComplete = xhr.loaded / xhr.total * 100;
           // console.log( Math.round(percentComplete, 2) + '% downloaded' );
          }
        };
        var onError = function ( xhr ) {
        };
        //Define textures here
        var facetex = new THREE.Texture();
        var tshirttex = new THREE.Texture();
        var shirttex = new THREE.Texture();
        var pantstex = new THREE.Texture();
        var hat1tex = new THREE.Texture();
        var hat2tex = new THREE.Texture();
        var hat3tex = new THREE.Texture();
        var hat4tex = new THREE.Texture();
        var hat5tex = new THREE.Texture();
        var tooltex = new THREE.Texture();
        // Load textures 
        var loader = new THREE.ImageLoader( manager );
    }
