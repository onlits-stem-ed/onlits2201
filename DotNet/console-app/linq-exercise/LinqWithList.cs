public class LinqWithList
{
    public void Test()
    {
        var stationaries = new List<string>{"Paper", "Pen", "Pencil", "Eraser", "Sharpener"};
        IEnumerable<string> query = stationaries.Where(stationary => stationary.Length < 5);
        
        foreach(string stationary in stationaries)
        {
            Console.WriteLine(stationary);
        }

        Console.WriteLine("\nStationeries whose length is less than 5.");
        foreach(string stationary in query)
        {
            Console.WriteLine(stationary);
        }
    }
}