import javafx.application.Application;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.control.Slider;
import javafx.scene.effect.ColorAdjust;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class Javafxapp extends Application {
    public static void main(String []args){
    launch(args);
    }
   
    public class Javafx extends Application {
 
   private static final int ADJUST_TYPE_HUE = 1;
   private static final int ADJUST_TYPE_CONTRAST = 2;
   private static final int ADJUST_TYPE_SATURATION = 3;
   private static final int ADJUST_TYPE_BRIGHTNESS = 4;
 
   private ColorAdjust colorAdjust;    



 
    @Override 
    public void start(Stage primaryStage) throws Exception {
         primaryStage.setTitle("editeur d'image");
         BorderPane borderPaneRoot =new BorderPane();
         Scene scene=new scene (borderPaneRopt,800,600);
         primaryStage.setScene(scene);
         
         HBox hBox1=new HBox();
         hBox1.setPandding(new Insets(10));
         hBox1.setSpacing(10);
         Label labelNom=new Label("editeur d'image:");
         labelNom.setPandding(new Insets(5));
         TextField textFieldNom=new TextField();
         Button buttonAdd=new Button ("ajouter");
         hBox1.getChildren().addAll(labelNom,textFieldNom,buttonAdd);
        
         VBox vBox1=new VBox();
         ListView<String>listView1=new ListView<>();
         listView1.getItems().addALL("effet","flou");
         vBox1.getChildren().add(listView1);
         borderPaneRoot.setCenter(vBox1);

         borderPaneRoot.setTop(hBox1);
         primaryStage.show();
    }
  }