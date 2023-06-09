namespace TodoAppPostgres.Models;

public class Todo
{
    public int Id { get; set; }
    public string? Name { get; set; }
    public int CompletedStatus { get; set; }
}