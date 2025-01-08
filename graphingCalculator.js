class graphingCalculator {
    constructor(canvasID) {
      this.canvasID = canvasID;
      this.smoothNess = 100;
      this.mathWindow = {
        xMax : 10,
        xMin : -10, 
        yMax : 5,
        yMin : -5      
      };
      this.graphScale = 1;
      //this.expression = "";
      this.expressions = new Map();
      this.scope = {x:0};
      this.canvas = document.getElementById(this.canvasID);
      this.ctx = this.canvas.getContext('2d');
      this.availableColors = ["Blue", "Red", "Chartreuse", "BlueViolet", "Brown", "OrangeRed", "Teal", "Yellow", "Black"];
  
      // legend variables
      this.legendID = "";
      this.legendCanvas = null;
      this.legendCtx = null;
  
      this.flipYAxis();
      this.drawGraph();
    }
  
    initExpressionField(fieldID) {
      var self = this;  // Need to save a reference to this, else the event listener will not know which function to call
      var targetElement = document.getElementById(fieldID);
      self.expressions.set(fieldID, {
        expression: "",
        color: self.availableColors[0],
        lineWidth: 1,
        scope: {x:0},
        label: fieldID,
        points: []
      });
      self.availableColors.push(self.availableColors[0]);
      self.availableColors.shift();
  
      targetElement.addEventListener("input", function(event) {
        self.setExpression(fieldID, event.target.value);
        self.drawGraph();
        console.log("Input value has changed:", event.target.value);
      });
    };  
  
    setLegend(legendID) {
      this.legendID = legendID;
      this.legendCanvas = document.getElementById(this.legendID);
      this.legendCtx = this.legendCanvas.getContext('2d');
      this.drawLegend();
    }
  
    drawLegend() {
      var ctx = this.legendCtx;
      var canvas = this.legendCanvas;
      ctx.clearRect(0,0,canvas.width, canvas.height);    
      var x = 10,
          y = 10;
      this.expressions.forEach((value, key) => {
        let expression = value.expression;
        if(expression.length != 0) {
          let color = this.expressions.get(key).color;
          ctx.beginPath();
          ctx.rect(x, y, 20, 10);
          ctx.fillStyle = color;
          ctx.fill();
          ctx.font = "12px Arial";
          ctx.fillText(value.label, 50, y + 8);
          y += 20;
          if (y > this.legendCanvas.height) {
            this.legendCanvas.height += 50;
            this.drawLegend();
          }
        }
      });
    }
  
    setExpression(fieldID, expression) {
      this.expressions.get(fieldID).expression = expression;
      var targetElement = document.getElementById(fieldID);
      targetElement.value = expression;
    }
  
    setLabel(fieldID, label) {
      this.expressions.get(fieldID).label = label;
    }
  
    setMathWindow(xMax=10, xMin=-10, yMax=5, yMin=-5) {
      this.mathWindow.xMax = xMax;
      this.mathWindow.xMin = xMin;
      this.mathWindow.yMax = yMax;
      this.mathWindow.yMin = yMin;
    }
  
    moveOriginHorizontally(num) {
      this.mathWindow.xMax += num;
      this.mathWindow.xMin += num;
    }
  
    moveOriginVertically(num) {
      this.mathWindow.yMax += num;
      this.mathWindow.yMin += num;
    }
  
    flipYAxis () {
      // Function Usage: Flip Y axis for easier calculation
      this.ctx.translate(0,this.canvas.height);
      this.ctx.scale(1,-1);
    }
  
    drawCurves() {
      var self = this;
      self.expressions.forEach((value, fieldID) => {
        self.drawCurve(fieldID);
      });
    }
  
    drawCurve(fieldID) {
      this.expressions.get(fieldID).points = [];
      var canvas = this.canvas;
      var c = this.ctx;
      var xMax = this.mathWindow.xMax;
      var xMin = this.mathWindow.xMin;
      var yMax = this.mathWindow.yMax;
      var yMin = this.mathWindow.yMin;
      var smoothNess = this.smoothNess;
      var i, x, y, percentX, percentY, mathX, mathY;
      c.beginPath();
      for(let i = 0; i < smoothNess; i++) {
        percentX = i / (smoothNess-1); // a loop with percentX represent how we go horizontally through the canvas
        mathX = percentX * (xMax - xMin) + xMin;  // convert percentX to real math coordinates
        mathY = this.evaluateMathExpr(fieldID,mathX);  // real math y-coordinate is just calculation from real math x-coordinate  
        percentY = (mathY - yMin) / (yMax - yMin); // convert real math y-coordinate back to pixel y-coordinate to draw
      
        x = percentX * canvas.width;
        y = percentY * canvas.height;
        c.lineTo(x,y);
        // save x,y coordinates
        var temp_x = Math.trunc(x);
        var temp_y = Math.trunc(y);
        var coordinate = temp_x.toString() + temp_y.toString();
        this.expressions.get(fieldID).points.push({x: x, y: y});
      }
      c.strokeStyle = this.expressions.get(fieldID).color;
      c.lineWidth = this.expressions.get(fieldID).lineWidth;
      c.stroke(); // c.lineTo() is to move the cursor, c.stroke() is to draw
    };
  
    evaluateMathExpr(fieldID,mathX) {
      try {
        var scope = this.expressions.get(fieldID).scope;
        var expression = this.expressions.get(fieldID).expression;
        scope.x = mathX;
        var mathY = math.evaluate(expression,scope);
        return mathY;
      } catch (error) {}
    }
  
    drawYAxix() {
      
    }
  
    drawGrid() {
      // Function Usage: The grid should first draw the 2 axises base on the defined xMax, xMin; yMax, yMin
      var x, y;
      var percentX, percentY;
      var xMin = this.mathWindow.xMin;
      var xMax = this.mathWindow.xMax;
      var yMin = this.mathWindow.yMin;
      var yMax = this.mathWindow.yMax;
      var smoothNess = this.smoothNess;
      var canvas = this.canvas;
      var ctx = this.ctx;
  
      // Identify the (0,0) point on the graph
      var percentX_0 = (-1) * xMin / (xMax - xMin);
      var percentY_0 = (-1) * yMin / (yMax - yMin);
      x = percentX_0 * canvas.width;
      y = percentY_0 * canvas.height;
  
      // Set linewidth to 1
      ctx.lineWidth = 1;
  
      // Draw the y-axis
      ctx.beginPath();
      ctx.lineTo(x,y);
      y = 0;
      ctx.lineTo(x,y);
      y = canvas.height;
      ctx.lineTo(x,y);
      y = percentY_0 * canvas.height;
      ctx.lineTo(x,y);  // This lineTo is for drawing twice which cause the line to be more bold
      ctx.strokeStyle = "rgba(0, 0, 0, 1)";
      ctx.stroke();
  
      // move cursor back to (0,0)
      x = percentX_0 * canvas.width;
      y = percentY_0 * canvas.height;
  
      // Draw the x-axis
      ctx.beginPath();
      ctx.lineTo(x,y);
      x = 0;
      ctx.lineTo(x,y);
      x = canvas.width;
      ctx.lineTo(x,y);
      x = percentX_0 * canvas.width;
      ctx.lineTo(x,y);  // This lineTo is for drawing twice which cause the line to be more bold
      ctx.stroke()
  
      // move cursor back to (0,0)
      x = percentX_0 * canvas.width;
      y = percentY_0 * canvas.height;
  
      // Draw the sub-grid
      // Draw sub-grid vertical lines:
      var dist_betw_vertical_lines = Math.floor(((xMax - xMin) / 8));
      var math_x_coord_leftmost_vertical_line = xMin - (xMin % dist_betw_vertical_lines);
      var math_x_coord = math_x_coord_leftmost_vertical_line;
      for(let i = 0; i < 19; i++) {
        ctx.beginPath()
        y = 0;
        percentX = (math_x_coord - xMin) / (xMax - xMin);
        x = percentX * canvas.width;
        ctx.lineTo(x,y);
        y = canvas.height;
        ctx.lineTo(x,y);
        ctx.strokeStyle = "rgba(0, 0, 0, 0.35)";
        ctx.stroke();
        math_x_coord += dist_betw_vertical_lines;
      }
  
      // Write numbers for x-axis
      ctx.save();
      ctx.translate(0,canvas.height);
      ctx.scale(1, -1);
      math_x_coord = math_x_coord_leftmost_vertical_line;
      for(let i = 0; i < 19; i++) {
        if(math_x_coord === 0) {
          math_x_coord += dist_betw_vertical_lines;
          continue;
        }
        percentX = (math_x_coord - xMin) / (xMax - xMin);
        x = percentX * canvas.width;
        y = -1 * (percentY_0 * canvas.height - 12.5) + canvas.height;
        //console.log("x: " + x + "; y: " + y);
        ctx.font = "14px arial";
        ctx.fillText(math_x_coord, x, y);
        math_x_coord += dist_betw_vertical_lines;
      }
      ctx.restore();
  
  
      // move cursor back to (0,0)s
      x = percentX_0 * canvas.width;
      y = percentY_0 * canvas.height;
      // Draw sub-grid horizontal lines
      var dist_betw_horizontal_lines = Math.floor(((yMax - yMin) / 5));
      console.log(dist_betw_horizontal_lines);
      var math_y_coord_lowest_horizontal_line = yMin - (yMin % dist_betw_horizontal_lines);
      var math_y_coord = math_y_coord_lowest_horizontal_line;
      for(let i = 0; i < 9; i++) {
        ctx.beginPath()
        x = 0;
        percentY = (math_y_coord - yMin) / (yMax - yMin);
        y = percentY * canvas.height;
        ctx.lineTo(x,y);
        x = canvas.width;
        ctx.lineTo(x,y);
        ctx.stroke();
        math_y_coord += dist_betw_horizontal_lines;
      }
  
      // Write numbers for y-axis
      ctx.save();
      ctx.scale(1, -1);
      ctx.translate(0,-canvas.height);
  
      math_y_coord = math_y_coord_lowest_horizontal_line;
      for(let i = 0; i < 19; i++) {
        // if(math_y_coord === 0) {
        //   math_y_coord += dist_betw_horizontal_lines;
        //   continue;
        // }
        percentY = 1 - (math_y_coord - yMin) / (yMax - yMin);
        y = percentY * canvas.height + 3;
        x = percentX_0 * canvas.width - 15;
        if(math_y_coord === 0) {
          y = y + 9.5;
          x = x + 5;
        }
        else if (math_y_coord > 0) {
          x = x + 4;
        }
        //console.log("x: " + x + "; y: " + y);
        ctx.font = "14px arial";
        ctx.fillText(math_y_coord, x, y);
        math_y_coord += dist_betw_horizontal_lines;
      }
      ctx.restore();  
    };  
  
    drawGraph() {
      var ctx = this.ctx;
      var canvas = this.canvas;
      ctx.clearRect(0,0,canvas.width, canvas.height);
      this.drawCurves();
      this.drawGrid();
      if (this.legendID.length !== 0) {
        this.drawLegend();
      }
    }
  
    setColor(fieldID, color) {
      this.expressions.get(fieldID).color = color;
    }
  
    setGraphScale(graphScale) {
      console.log("setGraphScale: " + graphScale);
      var xMax = this.mathWindow.xMax;
      var xMin = this.mathWindow.xMin;
      var yMax = this.mathWindow.yMax;
      var yMin = this.mathWindow.yMin;
      var xMid = (xMax + xMin) / 2;
      var yMid = (yMax + yMin) / 2;
  
      this.graphScale = graphScale;
      this.mathWindow.xMax = xMid + ((xMax - xMin) * graphScale / 2);
      this.mathWindow.xMin = xMid - ((xMax - xMin) * graphScale / 2);
      this.mathWindow.yMax = yMid + ((yMax - yMin) * graphScale / 2);
      this.mathWindow.yMin = yMid - ((yMax - yMin) * graphScale / 2);
    };
  
    addHoverProperty() {
      var canvas = this.canvas;
      var ctx = this.ctx;
      var self = this;
  
      canvas.addEventListener('mousemove', function(event) {
        var mouseX = event.clientX - canvas.getBoundingClientRect().left;
        var mouseY = -1 * (event.clientY - canvas.getBoundingClientRect().top) + canvas.height;
  
        console.log("mouseX: " + mouseX + "; mouseY: " + mouseY);
        self.expressions.forEach((value, key) => {
          for(let i = 0; i < self.smoothNess; i++) {
            const point = self.expressions.get(key).points[i];
            if( (point.x - 7 <= mouseX && mouseX <= point.x + 7) && (point.y - 7 <= mouseY && mouseY <= point.y + 7) ) {
              self.expressions.get(key).lineWidth = 2; 
              break;        
            }    
            else {
              self.expressions.get(key).lineWidth = 1; 
            }
          }        
        })
        self.drawGraph();
      });
    }
  };