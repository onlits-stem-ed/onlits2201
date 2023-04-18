using Microsoft.EntityFrameworkCore;
var builder = WebApplication.CreateBuilder(args);
builder.Services.AddDbContext<TodoDB>(opt => opt.UseInMemoryDatabase("TodoList"));
builder.Services.AddDatabaseDeveloperPageExceptionFilter();
var app = builder.Build();

app.MapGet("/", () => "Todo Application!");

app.MapGet("/todoitems", async (TodoDB db) => await db.Todos.ToListAsync());

app.MapGet("/todoitems/complete", async (TodoDB db) =>
await db.Todos.Where(t => t.IsComplete).ToListAsync());

app.MapPost("/todoitems", async (Todo todo, TodoDB db) =>
{
    db.Todos.Add(todo);
    await db.SaveChangesAsync();

    return Results.Created($"/todoitems/{todo.Id}", todo);
});


app.MapGet("/todoitems/{id}", async (int id, TodoDB db) =>
    await db.Todos.FindAsync(id)
     is Todo todo
     ? Results.Ok(todo)
     :Results.NotFound());

app.MapPut("/todoitems/{id}", async (int id, Todo inputTodo, TodoDB db) =>
{
    var todo = await db.Todos.FindAsync(id);

    if(todo is null) return Results.NotFound();

    todo.Name = inputTodo.Name;
    todo.IsComplete = inputTodo.IsComplete;

    await db.SaveChangesAsync();

    return Results.NoContent();
});

app.MapPut("/todoitems/complete/{id}", async (int id, Todo inputTodo, TodoDB db) =>
{
    var todo = await db.Todos.FindAsync(id);

    if(todo is null) return Results.NotFound();

    todo.IsComplete = inputTodo.IsComplete;

    await db.SaveChangesAsync();

    return Results.NoContent();
});

app.Run();  
