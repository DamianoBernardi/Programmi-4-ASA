import turtle # ...
import math   # sqrt()
import time   # sleep()
#------------------------------------------------
def set_all():
    global POSIZIONE, DISTANZA, DISTANZE, RIC_MAX
    
    WIDTH    = 800 # larghezza finestra
    HEIGHT   = 800 # altezza finestra
    RIC_MAX  = 6   # massima ricorsione
 
    POSIZIONE = HEIGHT*0.45              # posizione iniziale
    DISTANZA  = 2*POSIZIONE*math.sqrt(2) # dimensione iniziale della curva
    DISTANZE  = [0]*(RIC_MAX+1)          # dimensioni successive
 
    turtle.setup(width=WIDTH, height=HEIGHT)
    turtle.hideturtle()
    turtle.pencolor("red")
    turtle.pensize(2)
    turtle.bgcolor("pink")
    turtle.tracer(0)
#------------------------------------------------
def start_draw(r):
    DISTANZE[r] = DISTANZA
    for i in range(r-1,0,-1):
        DISTANZE[i]=DISTANZE[i+1]/3
    
    turtle.penup()
    turtle.setposition(-POSIZIONE, -POSIZIONE)
    turtle.setheading(45)
    turtle.pendown()
    turtle.clear()
def end_draw():    
    turtle.update()
    time.sleep(2)
#------------------------------------------------
def koch(n):
    if(n == 1):
        turtle.forward(DISTANZE[n])
    else:
        koch(n-1); turtle.left(60)
        koch(n-1); turtle.right(120)
        koch(n-1); turtle.left(60)
        koch(n-1)
#------------------------------------------------ MAIN
set_all()
for r in range(1,RIC_MAX+1):
    start_draw(r)       
    koch(r)
    end_draw()
turtle.done()