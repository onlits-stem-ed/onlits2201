using Microsoft.EntityFrameworkCore;

namespace TodoAppPostgres.Models;

public class TodoContext : DbContext
{
    public TodoContext(DbContextOptions<TodoContext> options)
        : base(options)
    {
    }

    public DbSet<TodoAppPostgres.Models.Todo> Todos { get; set; }
}