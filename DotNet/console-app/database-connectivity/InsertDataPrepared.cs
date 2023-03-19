using Microsoft.Data.Sqlite;

namespace DatabaseConnectivity;

public class InsertDataPrepared
{
    public void SetData(int admissionNumber, string name)
    {
        SqliteConnection connection = new SqliteConnection("DataSource=crud_test.db");
        SqliteCommand command  = new SqliteCommand();
        connection.Open();
        command.Connection = connection;
        command.CommandText = "INSERT student VALUES(@admission_no, @name)";
        SqliteParameter admissionNoParam = new SqliteParameter("@admission_no", admissionNumber);
        command.Parameters.Add(admissionNoParam);
        command.Parameters.AddWithValue("@name", name);
        command.Prepare();
        command.ExecuteNonQuery();
        connection.Close();
        new SelectData().GetData();
    }
}