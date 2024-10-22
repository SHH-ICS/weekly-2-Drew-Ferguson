import math

# Function to calculate the area and circumference
def calculate_circle(diameter):
    radius = diameter / 2
    area = math.pi * (radius ** 2)
    circumference = math.pi * diameter
    return area, circumference

# User input
diameter = float(input("Enter the diameter of the circle: "))

# Calculate area and circumference
area, circumference = calculate_circle(diameter)

# Display the results
print(f"Area: {area:.2f} square units")
print(f"Circumference: {circumference:.2f} units")