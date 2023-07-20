public class strongArm {
    public static void main(String[] args) {
        int number = 2;
        
        if (StrongN(number)) {
            System.out.println(number + " is a strong number.");
        } else {
            System.out.println(number + " is not a strong number.");
        }
    }
    
    public static boolean StrongN(int num) {
        int originalNum = num;
        int sum = 0;
        
        while (num > 0) {
            int digit = num % 10;
            sum += factorial(digit);
            num /= 10;
        }
        
        return sum == originalNum;
    }
    
    public static int factorial(int num) {
        if (num == 0 || num == 1) {
            return 1;
        } else {
            return num * factorial(num - 1);
        }
    }
}
