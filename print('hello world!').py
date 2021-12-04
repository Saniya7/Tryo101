import cv2 
from matplotlib import pyplot as plt 
image = cv2.imread('C:/Users/HP/Desktop/Tryo101/salt.jpg') 
print('Read Original Image') 
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY) 
print('Converted to Grayscale') 
blur= cv2.medianBlur(gray, 3) 
cv2.imshow('Original',image) 
cv2.imshow('Grey scale image', gray) 
cv2.imshow('output',blur) 
cv2.waitKey(0) 
cv2.destroyAllWindows()
