using Microsoft.Data.Sqlite;

namespace DatabaseConnectivity;

public class InsertData
{
    public void SetData(int admissionNumber, string name)
    {
        SqliteConnection connection = new SqliteConnection("DataSource=crud_test.db");
        SqliteCommand command  = new SqliteCommand();
        connection.Open();
        command.Connection = connection;
        command.CommandText = "INSERT INTO student VALUES(" + admissionNumber + ", '" + name + "')";
        command.ExecuteNonQuery();
        connection.Close();
        new SelectData().GetData();
    }
}