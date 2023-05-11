#include <iostream>
using namespace std;
int main()
{
    int n,j,k,temp;
    cout<<"enter array size\n";
    cin>>n;
    int a[n];
    cout<<"enter elements of array\n";
    for(int i=0;i<n;i++)
    cin>>a[i];
    for(j=0;j<n;j++)
    {
        for(k=j;k<n;k++)
        {
            if(a[j]>a[k])
            {
                temp=a[j];
                a[j]=a[k];
                a[k]=temp;
            }
        }
    }
    for(j=0;j<n;j++)
    cout<<a[j]<<" ";
    return 0;
}