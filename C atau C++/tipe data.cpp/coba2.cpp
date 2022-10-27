# include <stdio.h> 
# include <conio.h>
main()
{
char nm1[50]; 
char nm2[50];
puts("Masukkan Nama Pertama = "); gets(nm1);
printf("Masukkan Nama Kedua = "); scanf("%s",&nm2);
printf("\n\n");
puts("Selamat Datang Di Isekai"); puts(nm1);
printf("Selamat Datang Di Isekai %s", nm2);
}