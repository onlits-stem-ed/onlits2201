public class ExampleFromSite
{
    public void ListScoresGreaterThenEighty()
    {
        int[] scores = { 97, 92, 81, 60 };

        IEnumerable<int> scoreQuery =
            from score in scores
            where score > 80
            select score;

        foreach(int i in scoreQuery)
        {
            Console.Write(i + " ");
        }
        Console.WriteLine();

        Console.WriteLine(scoreQuery);
    }
}