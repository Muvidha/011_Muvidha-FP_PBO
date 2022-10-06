//Diah Ayuning Tyas (21091397013)

public class Praktikum4{

    
    public static void main( String[] args) {
        Limas persegiDanSegitiga = new Limas(1.0,2.0,5.0,2.0,2.0,3.0,2.0,7.0);
        double luas_Segitiga, luas_Persegi, luas_Limas;

        System.out.println("=== Data Segitiga ===");
            System.out.println("point\t: " + persegiDanSegitiga.getSx1() + ", " + persegiDanSegitiga.getSy1());
            System.out.println("Sisi Segitiga\t: " + (persegiDanSegitiga.getSy1() + persegiDanSegitiga.getSy2()));
            luas_Segitiga = persegiDanSegitiga.cariLuasSegitiga();
            System.out.println("Luas Segitiga\t: " + luas_Segitiga);
            
            
            System.out.println("\n=== Data Persegi ===");
            System.out.println("point\t: " + persegiDanSegitiga.getPx1() + ", " + persegiDanSegitiga.getPy1());
            System.out.println("Sisi Persegi\t: " + (persegiDanSegitiga.getPx1() + persegiDanSegitiga.getPx2()));
            luas_Persegi = persegiDanSegitiga.cariLuasPersegi();
            System.out.println("Luas Persegi\t: " + luas_Persegi);
            
            luas_Limas = (4 * luas_Segitiga) + luas_Persegi;
            System.out.println("\n\nLuas Limas : " + luas_Limas);

    }
}

class Limas{
    double Sx1; 
    double Sy1; 
    double Sx2; 
    double Sy2; 
    double Px1; 
    double Py1; 
    double Px2; 
    double Py2;

    Limas(double Sx1,double Sy1, double Sx2, double Sy2, double Px1, double Py1, double Px2, double Py2){
        this.Sx1 = Sx1;
        this.Sy1 = Sy1;
        this.Sx2 = Sx2;
        this.Sy2 = Sy2;
        this.Px1 = Px1;
        this.Px2 = Px2;
        this.Py1 = Py1;
        this.Py2 = Py2;
    }

    double getSx1(){
        return this.Sx1;
    }

    double getSx2(){
        return this.Sx2;
    }
    double getSy1(){
        return this.Sx1;
    }
    double getSy2(){
        return this.Sy2;
    }
    double getPx1(){
        return this.Px1;
    }
    double getPx2(){
        return this.Px2;
    }
    double getPy1(){
        return this.Py1;
    }
    double getPy2(){
        return this.Py2;
    }


    double cariLuasPersegi(){
        return (this.Px1 + this.Px2) * (this.Px1 + this.Px2);
    }

    double cariLuasSegitiga(){
        double luas = 0.5 * (this.Sy1 + this.Sy2) * Math.sqrt(3);
        return luas;
    }
}