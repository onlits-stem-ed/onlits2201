namespace UtilityLibraries;
public class StringLibrary
{
    public static bool StartsWithUpper(string? str)
    {
        if(string.IsNullOrWhiteSpace(str))
            return false;

        char ch = str[0];
        return char.IsUpper(ch);
    }

    public void Test()
    {
        Console.Write("Hello");
    }
}
