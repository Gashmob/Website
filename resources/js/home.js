const width = window.innerWidth;
const height = window.innerHeight;
const ratio = window.devicePixelRatio;

let canvas = document.querySelector('#myCanvas');
let context = canvas.getContext('2d');

canvas.width = width;
canvas.height = height;
canvas.style.width = width + 'px';
canvas.style.height = height + 'px';
context.scale(ratio, ratio);

// _.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-.

const radius = 10;

class Point {
    constructor(px, py, vx, vy) {
        this.px = px;
        this.py = py;
        this.vx = vx;
        this.vy = vy;
    }

    draw(ctxt) {
        ctxt.beginPath();
        ctxt.arc(this.px, this.py, radius, 0, 2 * Math.PI);
        ctxt.fill();
        ctxt.arc(this.px, this.py, radius, 0, 2 * Math.PI);
        ctxt.stroke();
        ctxt.closePath();
    }

    update(timestamp) {
        if (this.px > width - radius || this.px < radius) {
            this.vx *= -1;
        }
        if (this.py > height - radius || this.py < radius) {
            this.vy *= -1;
        }

        this.px += this.vx * timestamp;
        this.py += this.vy * timestamp;
    }

    distance(point2) {
        let x = point2.px - this.px;
        let y = point2.py - this.py;

        return Math.sqrt((x * x) + (y * y));
    }
}

const distanceMax = 150.0;
const widthMax = 5.0;

class Arc {
    constructor(x1, y1, x2, y2) {
        this.x1 = x1;
        this.y1 = y1;
        this.x2 = x2;
        this.y2 = y2;

        let x = x2 - x1;
        let y = y2 - y1;
        this.distance = Math.sqrt((x * x) + (y * y));
    }

    draw(ctxt) {
        ctxt.strokeStyle = 'rgba(0, 85, 255, ' + (1 - (this.distance / distanceMax)) + ')';
        ctxt.lineWidth = widthMax - (this.distance / distanceMax * widthMax);

        ctxt.beginPath();
        ctxt.moveTo(this.x1, this.y1);
        ctxt.lineTo(this.x2, this.y2);
        ctxt.stroke();
        ctxt.closePath();
    }
}

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

function getRandomFloat(min, max) {
    return Math.random() * (max - min) + min;
}

const density = 20_000; // One for each 20 000 pixels
const velocity = 0.005;

const points = [];
for (let i = 0; i < (width * height) / density; i++) {
    points[i] = new Point(getRandomInt(radius, width - radius), getRandomInt(radius, height - radius), getRandomFloat(-velocity, velocity), getRandomFloat(-velocity, velocity));
}

let arcs = [];

// _.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-.

let time = 0;

function animate(timestamp) {
    draw();
    update(timestamp - time);
    time = timestamp;
    requestAnimationFrame(animate);
}

function draw() {
    context.fillStyle = '#011931';
    context.fillRect(0, 0, width, height);

    context.fillStyle = '#0055FF';
    context.strokeStyle = 'rgba(0, 85, 255, .5)';
    context.lineWidth = 5;
    for (const point of points) {
        point.draw(context);
    }

    for (const arc of arcs) {
        arc.draw(context);
    }
}

function update(timestamp) {
    // Move points
    for (const point of points) {
        point.update(timestamp);
    }

    // Create arcs
    let i = 0;
    arcs = [];
    for (const point1 of points) {
        for (const point2 of points) {
            if (point1 !== point2) {
                if (point1.distance(point2) < distanceMax) {
                    arcs[i++] = new Arc(point1.px, point1.py, point2.px, point2.py);
                }
            }
        }
    }
}

requestAnimationFrame(animate);
