using Microsoft.Data.Sqlite;
using System.Data;
public class InsertDataDS
{
    void SetData(int admissionNumber, string name)
    {
        SqliteConnection connection = new SqliteConnection("Datasource=crud_test.db");
        SqliteCommand command = new SqliteCommand();
        DataSet dataset = new DataSet();
        // SqliteDataAdapter dataAdapter = new SqliteDataAdapter();
        connection.Open();
        command.Connection = connection;
        command.CommandText = "SELECT * student";

        connection.Close();
    }
}

/*
    Task scrapped due to unavailability of SqliteDataAdapter class in Microsoft.Data.Sqlite

    For more information, visit:

    https://learn.microsoft.com/en-us/dotnet/standard/data/sqlite/adonet-limitations
*/