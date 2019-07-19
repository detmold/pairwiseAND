# pairwiseAND

PairwiseAND problem: https://www.codechef.com/problems/AND

Opis: 
Dostajemy na wejściu liczbę N jest to ilość liczb sekwencji [Ai .. Aj]. Mamy obliczyć Ai AND Aj dla każdego i,j gdzie i < j

#Algorytm
1. Rozwiązujemy problem bit-by-bit. Oznaczmy jako f(i) - liczbę bitów w sekwencji A która ma ustawiona 2^1 jako 1. Przykład:
Dostajemy liczby: 1,2,3,4,5 zamieniamy je na binarne odpowiedniki:
001
010
011
100
101
Obliczamy 
f(0) = f(0) * (f(0) - 1) / 2 * 2^0 = 3 * (3 - 1) / 2 * 1 = 3
f(1) = f(1) * (f(1) - 1) / 2 * 2^1 = 2 * (1) / 2 * 2 = 2;
f(2) = f(2) * (f(2) - 1) / 2 * 2^2 = 2 * (1) /2 * 4 = 4; 
Następnie obliczmy sumę wszystkich f(i)