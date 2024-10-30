import math

# Function to calculate the area and circumference
def calculate_circle(diameter):
    radius = diameter / 2
    area = math.pi * (radius ** 2)
    circumference = math.pi * diameter
    return area, circumference

# User input with error handling
while True:
    try:
        diameter = float(input("Enter the diameter of the circle: "))
        if diameter < 0:
            print("Please enter a non-negative number for the diameter.")
        else:
            break
    except ValueError:
        print("Invalid input. Please enter a numeric value for the diameter.")

# Calculate area and circumference
area, circumference = calculate_circle(diameter)

# Display the results
print(f"Area: {area:.2f} square units")
print(f"Circumference: {circumference:.2f} units")