<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Model Example</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        body { margin: 0; }
        canvas { display: block; }
    </style>
</head>
<body>
    <div>insdad</div>
    <script>
        // สร้าง scene
        var scene = new THREE.Scene();
        // สร้าง camera
        var camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 0.1, 1000);
        // สร้าง renderer
        var renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        // เพิ่ม geometry
        var geometry = new THREE.BoxGeometry();
        // เพิ่ม material
        var material = new THREE.MeshBasicMaterial({color: 0x00ff00});
        // สร้าง mesh จาก geometry และ material
        var cube = new THREE.Mesh(geometry, material);
        scene.add(cube);

        // เลื่อน camera ออกไปจากแกน z
        camera.position.z = 5;

        // ฟังก์ชัน render loop
        var animate = function () {
            requestAnimationFrame(animate);

            // เพิ่มการหมุนกับ mesh
            cube.rotation.x += 0.01;
            cube.rotation.y += 0.01;

            // render scene
            renderer.render(scene, camera);
        };

        // เรียกใช้งาน render loop
        animate();
    </script>
</body>
</html>
