#include<iostream>
using namespace std;

class BST{
    private:
        struct Node{
            int data;
            Node* left;
            Node* right;
        };
        Node* root;
    
    public:
        BST(){
            root = nullptr;
        }

        void create(){
            int choice;
            do {
                Node *newnode = new Node;
                cout << "Enter data : ";
                cin >> newnode->data;
                newnode->left = nullptr;
                newnode->right = nullptr;
                if (root == nullptr) {
                    root = newnode;
                    
                }
                else {
                    Node* curr = root;
                    while (true) {
                        if (newnode->data <= curr->data) {
                            if (curr->left==nullptr) {
                                curr->left = newnode; 
                                break;
                            }
                            else{
                                curr = curr->left;
                            }
                        }
                        else{
                            if (curr->right==nullptr) {
                                curr->right = newnode;
                                break;
                            }
                            else {
                                curr = curr->right;
                            }
                        }
                    }
                }
                cout << "Press 1 to insert one more node.";
                cin >> choice;
            }while(choice == 1);
        }

        void pre_recurr(Node *t) {
            if (t!=nullptr){
                cout << t->data << " ";
                pre_recurr(t->left);
                pre_recurr(t->right);
            }
        }

        void inorder(Node *t){
            if (t!=nullptr){
                inorder(t->left);
                cout << t->data << " ";
                inorder(t->right);
            }
        }

        void postorder(Node *t){
            if (t!=nullptr){
                postorder(t->left);
                postorder(t->right);
                cout << t->data << " ";
            }
        }

        void display() {
            cout << "PreOrder : ";
            pre_recurr(root);
            cout << "\nInOrder : ";
            inorder(root);
            cout << "\nPostOrder : ";
            postorder(root);
        }
};

int main(){
    BST bt;
    bt.create();
    bt.display();
    return 0;
}